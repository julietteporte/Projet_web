<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moyenpaiement extends Model
{
  protected $table = "moyenpaiement";
  protected $fillable = array('intitule');

  public function commande()
  {
    return $this->belongsTo('App\Commande');
  }
}
