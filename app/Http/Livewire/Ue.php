<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Ue extends Component
{
    //public $ues = ['bonjour', 'add', 'com', 'pau', 'al'];
    public $ues = [];
    public function render()
    {
        // dd($this->ues);
        return view('livewire.ue');
    }
}
