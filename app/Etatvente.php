<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etatvente extends Model
{
  protected $table = "etatvente";
  protected $fillable = array('etat');
}
