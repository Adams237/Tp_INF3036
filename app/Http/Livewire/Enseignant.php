<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Enseignant extends Component
{
    //public $enseignant = ['bonjour', 'add', 'com', 'pau', 'al'];
    public $enseignants = [];
    public $professeur;
    public $filiere;
    public $idd;
    public function updatedProfesseur(){
        dd($this->professeur);

    }
    public function render(Request $request)
    { 
        $this->idd  = DB::table('departements')->where('nomDep', $request->filiere)->value('idDep');
        $this->enseignants = DB::table('enseignants')->where('idDep', $this->idd)->pluck('nomEns');

        // dd($this->enseignants);
        return view('livewire.enseignant');
    }
}
