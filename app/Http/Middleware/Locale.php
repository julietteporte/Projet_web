<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Log;

class Locale
{
    protected $languages = ['en','fr'];
    
    public function handle($request, Closure $next)
    {
        if(!session()->has('locale'))
        {
            session()->put('locale', $request->getPreferredLanguage($this->languages));
        }
        App::setLocale(session()->get('locale'));
        
        return $next($request);
    }
}