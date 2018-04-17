<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'compte';

    protected $fillable = [
        'id', 'nom', 'prenom', 'email', 'password', 'genre',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function typecompte()
    {
      return $this->hasOne('App\Typecompte', 'ID_TypeCompte');
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
      return $this->belongsToMany('App\Photo', 'liker', 'ID_Compte', 'ID_Photo')->withTimestamps();
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
        return $this->belongsToMany('App\Manifestation', 'participer', 'ID_Compte', 'ID_Manifestation')->withTimestamps();
    }
}
