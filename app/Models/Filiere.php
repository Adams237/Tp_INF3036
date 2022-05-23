<?php

namespace App\Models;

use App\Models\Enseignement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filiere extends Model
{
    use HasFactory;

    public function enseignements(){
        return $this->hasMany(Enseignement::class);
    }
}
