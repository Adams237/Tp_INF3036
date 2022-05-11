<?php

namespace App\Models;

use App\Models\Specialite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filiere extends Model
{
    use HasFactory;

    protected $fillable = ['nomFiliere'];

    public function specialites()
    {
        return $this->hasMany(Specialite::class);
    }
}
