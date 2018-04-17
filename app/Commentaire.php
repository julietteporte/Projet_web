<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
  protected $table = "commentaire";
  protected $fillable = ['Contenu'];

  public function compte()
  {
    return $this->hasOne('App\User', 'ID_Compte');
  }

  public function photo()
  {
    return $this->hasOne('App\Photo', 'ID_Photo');
  }
}
