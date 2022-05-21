<?php

namespace App\Models;

use App\Models\Specialite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ue extends Model
{
    protected $fillable = ['intitule'];
    use HasFactory;

    public function specialite(){
        return $this->belongsTo(Specialite::class);
    }
}
