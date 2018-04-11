<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commandeligne extends Model
{
  protected $table = "commandeligne";
  protected $fillable = array('quantiteproduit', 'prixunitaire');
}
