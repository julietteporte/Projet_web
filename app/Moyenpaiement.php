<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moyenpaiement extends Model
{
  protected $table = "moyenpaiement";
  protected $fillable = array('intitule');
}
