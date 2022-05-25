<?php

namespace App\Models;

use App\Models\Salle;
use App\Models\Enseignement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cour extends Model
{
    use HasFactory;

    public function enseignement(){
        return $this->belongsTo(Enseignement::class, 'id_ense');
    }
    public function salle(){
        return $this->belongsTo(Salle::class);
    }
}
