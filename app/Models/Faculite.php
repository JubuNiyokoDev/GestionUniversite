<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculite extends Model
{
    protected $fillable = ['nomf', 'codef'];

    // Une faculté a plusieurs départements
    public function departements()
    {
        return $this->hasMany(Departement::class);
    }
}
