<?php

namespace App\Models;

use App\Models\Enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;

    public function enseignants(){
        return $this->hasMany(Enseignant::class);
    }
}
