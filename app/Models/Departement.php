<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = ['nomd', 'coded', 'faculite_id'];

    // Un département appartient à une faculté
    public function faculite()
    {
        return $this->belongsTo(Faculite::class);
    }

    // Un département a plusieurs classes
    public function classes()
    {
        return $this->hasMany(Classe::class);
    }
}
