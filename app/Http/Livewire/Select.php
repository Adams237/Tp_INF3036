<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select extends Component
{
    public $tab ;
    public $tabs = ['bonjour', 'add', 'com', 'pau', 'al'];
    public function render()
    {
        return view('livewire.select');
    }
}
