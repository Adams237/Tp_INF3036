<?php

namespace App\Models;

use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignant extends Model
{
    use HasFactory;

    protected $fillable = ['nomEns'];

    public function departement(){
        return $this->belongsTo(Departement::class);
    }
}
