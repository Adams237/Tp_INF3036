<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AfficherEmploiDeTemps extends Component
{
    public $filiere;
    public $niveau;
    public $effectif;
    public $idt;

    public function mount(Request $request){
        $this->filiere = $request->nom;
        
        $this->idt = DB::table('filieres')->where('nom_filiere', $request->nom)->value('id');
    }

    public function render()
    {
        return view('livewire.afficher-emploi-de-temps')->layout('layouts.app2');
    }
}
