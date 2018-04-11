<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disponibilite extends Model
{
  protected $table = "disponibilite";
  protected $fillable = array('etat');
}
