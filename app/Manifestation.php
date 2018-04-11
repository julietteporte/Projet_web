<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{
  protected $table = "manifestation";
  protected $fillable = array('intitule', 'description', 'datemanifestation', 'prix', 'active');
}
