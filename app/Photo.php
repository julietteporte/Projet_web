<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $table = "photo";
  protected $fillable = ['Intitule', 'Description', 'Fichier',];

  public function manifestation()
  {
    return $this->belongsTo('App\Manifestation', 'ID_Manifestation');
  }

  public function commentaire()
  {
    return $this->belongsTo('App\Commentaire');
  }

  public function poster()
  {
    return $this->hasOne('App\User', 'ID_Compte');
  }

  public function liker()
  {
    return $this->belongsToMany('App\User', 'liker', 'ID_Photo', 'ID_Compte')->withTimestamps();
  }
}
