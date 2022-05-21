<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EmploiDeTemps extends Component
{

    public $filiere;
    public $niveau;
    public $specialite;
    public $tabs;
    public $ues;
    public $enseignants;
    public $salles;
    public $idt;
    public $idd;
    public $capaciteSalle;
    public $professeur;


    public function updatedProfesseur(){
        dd($this->professeur);
    }
    public function envoyer(){
        $validateData = $this->validate([
            'ue' => 'nullable',
            'professeur' => 'nullable',
            'salle' => 'nullable'
        ]);
        dd($validateData);
    }

    public function updatedChanger(){
        dd('boooooo');
    }
    public function mount(Request $request) {
        $this->filiere = $request->filiere;
        $this->niveau = $request->niveau;
        $this->specialite = $request->choixSpec;
        // $this->idt = DB::table('specialites')->where('nomSpec', $request->choixSpec)->get();

    }

    public function render(Request $request)
    {
        // dd($request->choixSpec); 
        // $this->idt = DB::table('specialites')->where('nomSpec', $request->choixSpec)->value('idSpec');
        // dd($this->idt);   
        // $this->ues = DB::table('ues')->where('idSpec', $this->idt)->pluck('intutile');
        // dd($this->ues);
        // $this->idd  = DB::table('departements')->where('nomDep', $request->filiere)->value('idDep');
        // $this->enseignants = DB::table('enseignants')->where('idDep', $this->idd)->pluck('nomEns');

        // $this->salles = DB::table('salles')->pluck('nomSalle');
        // $this->capaciteSalle = DB::table('salles')->pluck('capacite');
        // dd($this->capaciteSalle);
        
        return view('livewire.emploiDeTemps')->layout('layouts.app2');
    }
}
