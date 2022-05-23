<?php

namespace App\Models;

use App\Models\Ue;
use App\Models\Cour;
use App\Models\Filiere;
use App\Models\Enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignement extends Model
{
    use HasFactory;

    public function enseignant(){
        return $this->belongsTo(Enseignant::class);
    }

    public function filiere(){
        return $this->belongsTo(Filiere::class);
    }

    public function cours(){
        return $this->hasMany(Cour::class);
    }

    public function ues(){
        return $this->belongsToMany(Ue::class);
    }
}
