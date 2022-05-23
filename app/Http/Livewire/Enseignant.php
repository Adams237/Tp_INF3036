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
        $this->idd  = DB::table('departements')->where('nom_dep', $request->filiere)->value('id');
        $this->enseignants = DB::table('enseignants')->where('id', $this->idd)->pluck('nom_ens');

        // dd($this->enseignants);
        return view('livewire.enseignant');
    }
}
