<?php

namespace App\Models;

use App\Models\Ue;
use App\Models\Cour;
use App\Models\Filiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialite extends Model
{
    use HasFactory;

    protected $fillable = ['nomSpec', 'effectifSpec'];

    public function ues(){
        return $this->hasMany(Ue::class);
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function cours()
    {
        return $this->hasMany(Cour::class);
    }
}
