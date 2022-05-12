<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Sidebar extends Component
{
    public $filieres;
    public function render()
    {
        $this->filieres = DB::table('filieres')->get();   
        return view('livewire.sidebar');
    }
}
