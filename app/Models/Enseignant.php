<?php

namespace App\Models;

use App\Models\Departement;
use App\Models\Enseignement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignant extends Model
{
    use HasFactory;

    public function departement(){
        return $this->belongsTo(Departement::class);
    }

    public function enseignements(){
        return $this->hasMany(Enseignement::class);
    }
}
