<?php

namespace App\Models;

use App\Models\Cour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salle extends Model
{
    use HasFactory;

    protected $fillable = ['nomSalle','capacite'];

    public function cours()
    {
        return $this->hasMany(Cour::class);
    }
}
