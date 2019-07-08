<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prenom', 'nom', 'ci', 'delivre', 'telephone', 'prix', 'local1', 'arrivee', 'depart', 'contrat', 'titre', 'image', 'garantie'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'prenom' => 'string',
        'nom' => 'string',
        'ci' => 'string',
        'delivre' => 'string',
        'telephone' => 'string',
        'prix' => 'integer',
        'local1' => 'string',
        'arrivee' => 'string',
        'depart' => 'string',
        'contrat' => 'string',
        'titre' => 'string',
        'image' => 'string',
        'garantie' => 'string',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];
}
