<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typevote extends Model
{
  protected $table = "typevote";
  protected $fillable = ['Type'];

  public function vote()
  {
    return $this->belongsTo('App\Vote');
  }
}
