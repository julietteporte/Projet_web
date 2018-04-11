<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
  protected $table = "produit";
  protected $fillable = array('intitule', 'legende', 'description', 'prix', 'active');
}
