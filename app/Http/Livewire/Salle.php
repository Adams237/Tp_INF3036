<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Salle extends Component
{
    //public $salles = ['bonjour', 'add', 'com', 'pau', 'al'];
    public $filiere;
    public $salles = [];
    public function render()
    {
        $this->salles = DB::table('salles')->pluck('nomSalle');
        // dd($this->salles);
        return view('livewire.salle');
    }
}
