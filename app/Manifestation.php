<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{

    public $timestamps = false;

    protected $dateFormat = 'U';

    protected $table = "manifestation";

    // protected $fillable = ['ID', 'intitule', 'description', 'datemanifestation', 'lieu', 'prix', 'etatvalidite', 'frequence', 'isactive', ];
    protected $fillable = [
        'ID',
        'Intitule',
        'Description',
        'DateManifestation',
        'Lieu',
        'Prix',
        'Frequence',
        'Fichier'
    ];

    public function creer()
    {
        return $this->belongsTo('App\User', 'ID_Compte');
    }

    public function participer()
    {
        return $this->belongsToMany('App\User', 'participer', 'ID_Manifestation', 'ID_Compte')->withTimestamps();
    }

    public function vote()
    {
        return $this->hasMany('App\Vote', 'ID_Manifestation', 'ID', 'vote');
    }

    public function photo()
    {
        return $this->hasMany('App\Photo');
    }

    public function votePour()
    {
        return $this->hasMany('App\Vote', 'ID_Manifestation', 'ID', 'vote')->where('ID_TypeVote', 1);
    }

    public function voteContre()
    {
        return $this->hasMany('App\Vote', 'ID_Manifestation', 'ID', 'vote')->where('ID_TypeVote', 2);
    }
}
