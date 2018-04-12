<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

      protected $table = "compte";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'name', 'email', 'password',
    ];*/

    protected $fillable = ['adressemail', 'motdepasse', 'motdepassefacebook', 'nom', 'prenom', 'dateinscription', 'datedernierevisite', 'genre', 'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'motdepasse', 'remember_token',
    ];

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
