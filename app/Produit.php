<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\FilterQueryTrait;

class Produit extends Model
{
    use FilterQueryTrait;

    protected $table = "produit";
    protected $fillable = ['Intitule', 'Legende', 'Description', 'Prix', 'Fichier', 'Disponibilite',];

    public function commandeligne()
    {
        return $this->belongsTo('App\Commandeligne');
        }

        public function categorie()
        {
            return $this->hasOne('App\Categorie', 'ID_Categorie');
        }

        public function image()
        {
            return $this->hasMany('App\Image');
        }
}
