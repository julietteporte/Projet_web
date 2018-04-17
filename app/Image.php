<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $table = "image";
  protected $fillable = ['Fichier'];

  public function produit()
  {
    return $this->belongsTo('App\Produit', 'ID_Produit');
  }
}
