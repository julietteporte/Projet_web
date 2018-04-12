<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moyenpaiement extends Model
{
  protected $table = "moyenpaiement";
  protected $fillable = ['intitule'];

  public function commande()
  {
    return $this->belongsTo('App\Commande');
  }
}
