<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{
    public $timestamps = false;
    protected $dateFormat = 'U';
    protected $table = "manifestation";
    // protected $fillable = ['ID', 'intitule', 'description', 'datemanifestation', 'lieu', 'prix', 'etatvalidite', 'frequence', 'isactive', ];
    protected $fillable = ['Intitule', 'Description', 'DateManifestation', 'Lieu', 'Prix', 'Frequence', ];

    public function creer()
    {
        return $this->belongsTo('App\User', 'ID_Compte');
    }

    public function participer()
    {
        return $this->belongsToMany('App\User', 'participer', 'ID_Manifestation', 'ID_Compte')->withTimestamps();
    }

    public function vote()
    {
        return $this->belongsTo('App\Vote');
    }

    public function photo()
    {
        return $this->hasMany('App\Photo');
    }
}
