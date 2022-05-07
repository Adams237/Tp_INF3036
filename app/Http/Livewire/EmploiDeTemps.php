<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmploiDeTemps extends Component
{
    public $ue;
    public $professeur;
    public $salle;
    public $tab ;
    public $tabs = ['bonjour', 'add', 'com', 'pau', 'al'];
    public function envoyer(){
        $validateData = $this->validate([
            'ue' => 'nullable',
            'professeur' => 'nullable',
            'salle' => 'nullable'
        ]);
        dd($validateData);
    }
    public function render()
    {
        return view('livewire.emploiDeTemps')->layout('layouts.app2');
    }
}
