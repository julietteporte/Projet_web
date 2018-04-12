<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
  protected $table = "commande";
  protected $fillable = array('datecommande', 'heurecommande', 'reference');

  public function compte()
  {
    return $this->hasOne('App\Compte');
  }

  public function moyenpaiement()
  {
    return $this->hasOne('App\Moyenpaiement');
  }

  public function etatvente()
  {
    return $this->hasOne('App\Etatvente');
  }

  public function commandeligne()
  {
    return $this->hasMany('App\Commandeligne');
  }
}
