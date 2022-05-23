<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashbord extends Component
{
    public $filiere;
    public function render()
    { 
        $this->filiere = DB::table('filieres')->pluck('nom_filiere');
        return view('dashbord')->layout('layouts.app2');
    }
}
