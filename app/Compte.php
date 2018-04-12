<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
  protected $table = "compte";
  protected $fillable = array('adressemail', 'motdepasse', 'motdepassefacebook', 'nom', 'prenom', 'dateinscription', 'datedernierevisite', 'genre', 'active');

  public function typecompte()
  {
    return $this->hasOne('App\Typecompte');
  }

  public function commande()
  {
    return $this->belongsTo('App\Commande');
  }

  public function vote()
  {
    return $this->belongsTo('App\Vote');
  }

  public function poster()
  {
    return $this->belongsTo('App\Photo');
  }

  public function liker()
  {
    return $this->belongsToMany('App\Photo', 'liker');
  }

  public function commentaire()
  {
    return $this->belongsTo('App\Commentaire');
  }

  public function creer()
  {
    return $this->belongsTo('App\Manifestation');
  }

  public function participer()
  {
    return $this->belongsToMany('App\Manifestation', 'participer');
  }
}
