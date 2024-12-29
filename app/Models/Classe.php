<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = ['niveau', 'departement_id'];

    // Une classe appartient à un département
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    // Une classe a plusieurs inscriptions (liaison avec les étudiants)
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

    // Relation à travers la table pivot inscriptions pour obtenir les étudiants
    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'inscriptions');
    }
}
