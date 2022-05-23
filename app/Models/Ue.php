<?php

namespace App\Models;

use App\Models\Niveau;
use App\Models\Enseignement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ue extends Model
{
    use HasFactory;

    public function niveau(){
        return $this->belongsTo(Niveau::class);
    }

    public function enseignements(){
        return $this->belongsToMany(Enseignement::class);
    }
}
