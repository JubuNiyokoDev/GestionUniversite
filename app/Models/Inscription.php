<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = ['etudiant_id', 'classe_id'];

    // Une inscription appartient à un étudiant
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    // Une inscription appartient à une classe
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
}
