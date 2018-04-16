<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $table = "photo";
  protected $fillable = ['intitule', 'description', 'fichier', 'isactive',];

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
    return $this->hasOne('App\Compte', 'ID_Compte');
  }

  public function liker()
  {
    return $this->belongsToMany('App\Compte', 'liker', 'ID_Photo', 'ID_Compte')->withTimestamps();
  }
}
