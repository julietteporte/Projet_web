<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{
  protected $table = "manifestation";
  protected $fillable = array('intitule', 'description', 'datemanifestation', 'prix', 'active');

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
