<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = ['nom', 'prenom', 'genre', 'date_de_naissance', 'note'];

    // Relation avec les classes à travers la table d'inscriptions
    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'inscriptions');
    }
}
