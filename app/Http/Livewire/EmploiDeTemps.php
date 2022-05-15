<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class EmploiDeTemps extends Component
{

    public $filiere;
    public $niveau;
    public $specialite;
    public $tabs = ['change', 'uand', 'même', 'pour', 'verifier'];

    public function envoyer(){
        $validateData = $this->validate([
            'ue' => 'nullable',
            'professeur' => 'nullable',
            'salle' => 'nullable'
        ]);
        dd($validateData);
    }

    public function mount(Request $request) {
        $this->filiere = $request->filiere;
        $this->niveau = $request->niveau;
        $this->specialite = $request->choixSpec;
    }

    public function render()
    {
        // dd($this->tabs);
        return view('livewire.emploiDeTemps')->layout('layouts.app2');
    }
}
