<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Salle extends Component
{
    //public $salles = ['bonjour', 'add', 'com', 'pau', 'al'];
    public $salles = [];
    public function render()
    {
        return view('livewire.salle');
    }
}
