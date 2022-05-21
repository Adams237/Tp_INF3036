<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Ue extends Component
{
    //public $ues = ['bonjour', 'add', 'com', 'pau', 'al'];
    public $ues ;
    public $filiere;
    public $idt;
    public $choixSpec;
    public $specialite;
    
    public function updatedUe(){
        dd('bonjour');
    }

    public function render(Request $request)
    {
       $this->idt = DB::table('specialites')->where('nomSpec', $this->specialite)->value('idSpec');
        // dd($this->idt);   
        $this->ues = DB::table('ues')->where('idSpec', $this->idt)->pluck('intutile');
        // dd($this->ues);
        return view('livewire.ue');
    }
}
