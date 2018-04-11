<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
  protected $table = "commentaire";
  protected $fillable = array('contenu', 'active');
}
