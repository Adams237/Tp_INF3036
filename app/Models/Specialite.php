<?php

namespace App\Models;

use App\Models\Cour;
use App\Models\Filiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialite extends Model
{
    use HasFactory;

    protected $fillable = ['nomSpec', 'effectifSpec'];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function cours()
    {
        return $this->hasMany(Cour::class);
    }
}
