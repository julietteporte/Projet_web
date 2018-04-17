<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
  protected $table = "produit";
  protected $fillable = ['Intitule', 'Legende', 'Description', 'Prix', 'Disponibilite',];

  public function commandeligne()
  {
    return $this->belongsTo('App\Commandeligne');
  }

  public function categorie()
  {
    return $this->hasOne('App\Categorie', 'ID_Categorie');
  }

  public function image()
  {
    return $this->hasMany('App\Image');
  }
}
