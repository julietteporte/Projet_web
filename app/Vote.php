<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
  protected $table = "vote";

  public function compte()
  {
    return $this->hasOne('App\Compte', 'ID_Compte');
  }

  public function typevote()
  {
    return $this->hasOne('App\Typevote', 'ID_Typevote');
  }

  public function manifestation()
  {
    return $this->hasOne('App\Manifestation', 'ID_Manifestation');
  }
}
