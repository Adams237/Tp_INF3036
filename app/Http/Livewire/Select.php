<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select extends Component
{
    public $filiere;
    public $niveau;
    public $specialite;
    public $effectif;

    public function render()
    {
        // dd($this->filiere);
        return view('livewire.select');
    }
}
