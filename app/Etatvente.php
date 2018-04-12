<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etatvente extends Model
{
  protected $table = "etatvente";
  protected $fillable = ['etat'];

  public function commande()
  {
    return $this->belongsTo('App\Commande');
  }
}
