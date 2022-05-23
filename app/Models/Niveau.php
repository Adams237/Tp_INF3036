<?php

namespace App\Models;

use App\Models\Ue;
use App\Models\Specialite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Niveau extends Model
{
    use HasFactory;

    public function specialite(){
        return $this->belongsTo(Specialite::class);
    }

    public function ues(){
        return $this->hasMany(Ue::class);
    }
}
