<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Enseignant extends Component
{
    //public $enseignant = ['bonjour', 'add', 'com', 'pau', 'al'];
    public $enseignants = [];
    public function render()
    {
        return view('livewire.enseignant');
    }
}
