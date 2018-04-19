<?php

namespace App\Traits;

trait FilterQueryTrait
{
    private $filteredQuery;

    public function filterQuery(array $filters = [], $orderBy = null, $order = null)
    {
        if (is_null($orderBy)) {
            $orderBy = $this->getTable() . '.id';
        }

        if (is_null($order)) {
            $order = 'desc';
        }

        $results = $this->where(function ($query) use (&$filters) {

            $this->filteredQuery = $query;

            // Determine filters
            if (empty($filters)) {
                $filters = $this->getQueryFilters();
            }

            // Parse filters
            return $this->prioritizeFilters($filters);
        });

        return $results->orderBy($orderBy, $order);
    }

    public function getQueryFilters()
    {
        $filters = [];
        $requestedFilters = app('request')->get('filters');
        if (is_array($requestedFilters)) {
            foreach ($requestedFilters as $key => $filterName) {
                if ($this->isFillable($key)) {
                    $filters[$key] = $filterName;
                }
            }
        }

        return $filters;
    }

    public function prioritizeFilters($filters)
    {
        $first = [];
        $rest = [];
        function printListRecursive($a, $var = '', $i = 0)
        {
            if (!is_array($a)) {
                $var = $a;
                return $var;
            }
            $string = '';
            foreach ($a as $k => $value) {
                if (!is_array($value)) {
                    $string = $k;
                } else {
                    $string = printListRecursive($value, $var, $i + 1);
                }
            }
            return $string;
        }

        foreach ($filters as $key => $f) {
            if (in_array(strtolower(printListRecursive($f)), ['orwhere'])) {
                $rest[$key] = $f;
            } else {
                $first[$key] = $f;
            }
        }

        $this->applyQueryFilters($first);
        if ($this->filteredQuery->count() > 0) {
            $this->applyQueryFilters($rest);
        }

        return $this->filteredQuery;
    }

    public function applyQueryFilters(array $filters = [])
    {
        foreach ($filters as $key => $value) {

            // Simple filters
            if (!empty($value) && !is_array($value) && !preg_match('#,#is', $value)) {

                // Avoid ambigous fields
                $key = $this->getTable() . '.' . $key;

                // Define verb
                switch ($value) {

                    case 'null';
                        $this->filteredQuery->whereNull($key);
                        break;

                    // We use where + like instead of whereIn as like is insensitive
                    default:
                        $this->filteredQuery->where($key, 'like', $value);
                }
            } // Filter is an array
            else {

                // Parse values
                $searchValues = [];
                if (is_array($value)) {
                    foreach ($value as $constraint => $verbOrValue) {

                        //determine
                        if (is_array($verbOrValue)) {
                            $verb = array_keys($verbOrValue)[0];
                            $filterValue = $verbOrValue[$verb];
                        } else {
                            $filterValue = $verbOrValue;
                        }

                        // Build array of values
                        if (preg_match('#,#is', $filterValue)) {
                            if ($constraint == 'in') {
                                $searchValues[] = $filterValue;
                            } else {
                                $searchValues = array_merge($searchValues, explode(',', $filterValue));
                            }
                        } else {
                            $searchValues[] = $filterValue;
                        }

                        foreach ($searchValues as $search) {

                            // Set operator
                            switch ((string)$constraint) {

                                case 'min':
                                    $searchKey = $key;
                                    $operator = '>=';
                                    $searchValue = $search;
                                    $verb = isset($verb) ? $verb : 'where';
                                    break;
                                case 'max':
                                    $searchKey = $key;
                                    $operator = '<=';
                                    $searchValue = $search;
                                    $verb = isset($verb) ? $verb : 'where';
                                    break;

                                case 'like':
                                    $searchKey = $key;
                                    $operator = 'like';
                                    $searchValue = '%' . $search . '%';
                                    $verb = isset($verb) ? $verb : 'where';
                                    break;

                                case 'exists':
                                    $searchKey = $key . '.' . $search . '';
                                    $operator = 'exists';
                                    $searchValue = true;
                                    $verb = isset($verb) ? $verb : 'where';
                                    break;

                                case 'not':
                                    $searchKey = $key;
                                    switch ($search) {
                                        case 'null':
                                            $verb = 'whereNotNull';
                                            break;
                                        default:
                                            $verb = 'whereNotIn';
                                    }
                                    if (is_string($search)) {
                                        $searchValue = explode(',', $search);
                                    } else {
                                        $searchValue = $search;
                                    }
                                    break;

                                case 'in':
                                    $searchKey = $key;
                                    if (is_string($search)) {
                                        $searchValue = explode(',', $search);
                                    } else {
                                        $searchValue = $search;
                                    }
                                    $verb = isset($verb) ? $verb : 'whereIn';
                                    break;

                                default:
                                    $searchKey = $key;
                                    $operator = '=';
                                    $searchValue = $search;
                                    $verb = isset($verb) ? $verb : 'where';
                            }

                            // Avoid ambigous fields
                            $searchKey = $this->getTable() . '.' . $searchKey;

                            if (method_exists($this->filteredQuery, $verb)) {
                                switch ($verb) {

                                    case 'whereNotNull':
                                        $this->filteredQuery->{$verb}($searchKey);
                                        break;

                                    case 'whereNotIn':
                                        $this->filteredQuery->{$verb}($searchKey, $searchValue);
                                        break;

                                    case 'whereIn':
                                        $this->filteredQuery->{$verb}($searchKey, $searchValue);
                                        break;

                                    case 'where':
                                    default:
                                        $this->filteredQuery->{$verb}($searchKey, $operator, $searchValue);
                                }
                            }
                        }
                    }
                }
            }
        }

        return $this->filteredQuery;
    }
}