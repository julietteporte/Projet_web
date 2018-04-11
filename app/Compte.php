<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
  protected $table = "compte";
  protected $fillable = array('adressemail', 'motdepasse', 'motdepassefacebook', 'nom', 'prenom', 'dateinscription', 'datedernierevisite', 'genre', 'active');
}
