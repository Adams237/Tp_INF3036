<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class ChoixModif extends Component
{
    public $filiere;
    public $niveau;
    public $choixSpec;
    public $effectifs;
    public $niveaux;
    public $id_filiere;
    public function mount(Request $request){
        $this->filiere = $request->nom;
        $this->id_filiere;
    }
    public function render()
    {
        return view('livewire.choix-modif')->layout('layouts.app2');
    }
}
