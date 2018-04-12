<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $table = "image";
  protected $fillable = array('fichier');

  public function produit()
  {
    return $this->belongsTo('App\Produit');
  }
}