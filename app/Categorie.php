<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
  protected $table = "categorie";
  protected $fillable = array('intitule');

  public function produit()
  {
    return $this->belongsTo('App\Produit');
  }
}
