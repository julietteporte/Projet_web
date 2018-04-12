<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $table = "photo";
  protected $fillable = array('intitule', 'description', 'fichier', 'active');

  public function manifestation()
  {
    return $this->belongsTo('App\Manifestation');
  }

  public function commentaire()
  {
    return $this->belongsTo('App\Commentaire');
  }

  public function poster()
  {
    return $this->hasOne('App\Compte');
  }
  
  public function liker()
  {
    return $this->belongsToMany('App\Compte');
  }
}
