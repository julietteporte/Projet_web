<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commandeligne extends Model
{
  protected $table = "commandeligne";
  protected $fillable = ['quantiteproduit', 'prixunitaire',];

  public function commande()
  {
    return $this->belongsTo('App\Commande', 'ID_Commande');
  }

  public function produit()
  {
    return $this->hasOne('App\Produit', 'ID_Produit');
  }
}
