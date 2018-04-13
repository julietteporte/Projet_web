<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{
  protected $table = "manifestation";
  protected $fillable = ['intitule', 'description', 'datemanifestation', 'lieu', 'prix', 'etatvalidite', 'frequence', 'active', ];

  public function créer()
  {
    return $this->hasOne('App\Compte');
  }

  public function participer()
  {
    return $this->belongsToMany('App\Compte', 'participer');
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
