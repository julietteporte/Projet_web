<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{
  protected $table = "manifestation";
  protected $fillable = ['Intitule', 'Description', 'DateManifestation', 'Lieu', 'Prix', 'Frequence', ];

  public function créer()
  {
    return $this->hasOne('App\Compte', 'ID_Compte');
  }

  public function participer()
  {
    return $this->belongsToMany('App\Compte', 'participer', 'ID_Manifestation', 'ID_Compte')->withTimestamps();
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
