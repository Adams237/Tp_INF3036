<?php

namespace App\Models;

use App\Models\Cour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = ['nomClasse','niveau','groupe','effectif'];

    public function cours()
    {
        return $this->hasMany(Cour::class);
    }
}
