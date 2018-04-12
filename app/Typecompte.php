<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typecompte extends Model
{
  protected $table = "typecompte";
  protected $fillable = array('type');

  public function compte()
  {
    return $this->belongsTo('App\Compte');
  }
}
