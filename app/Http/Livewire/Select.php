<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select extends Component
{
    public $matiere;
    public $filiere;
    public $specialite;
    // public $matiere;
    // public $prof;
    public $amphi;
    public $prof;
    public $effectif;

    public function render()
    {
        // dd($this->filiere);
        // dd($this->prof);
        return view('livewire.select');
    }
}
