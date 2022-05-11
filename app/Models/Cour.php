<?php

namespace App\Models;

use App\Models\Salle;
use App\Models\Classe;
use App\Models\Enseignant;
use App\Models\Specialite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cour extends Model
{
    use HasFactory;

    protected $fillable = ['nomCour'];

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function specialite()
    {
        return $this->belongsTo(Specialite::class);
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }

    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class);
    }
}
