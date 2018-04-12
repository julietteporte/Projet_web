<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
  protected $table = "commentaire";
  protected $fillable = array('contenu', 'active');

  public function compte()
  {
    return $this->hasOne('App\Compte');
  }

  public function photo()
  {
    return $this->hasOne('App\Photo');
  }
}
