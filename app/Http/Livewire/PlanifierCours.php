<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanifierCours extends Component
{
    public $filiere;
    public $niveau;
    public $specialites;
    public $effectif;
    public $niveaux;
    public $ues;
    public $niv;
    public $matiere;
    public $eff;
    public $mesues;

    public function updatedMatiere(){
        $this->mesues = DB::table('ues')->where('id_niveau', $this->eff[0]['id'])->where('nom_ue', '<>', $this->matiere)->get();
    }

    public function mount(Request $request){
        $this->filiere = $request->filiere;
        $this->niveau = $request->niveau;
        $this->specialites = $request->choixSpec;
        $this->effectif = $request->effectif;
        $spec = DB::table('specialites')->where('nom_spec', $this->specialites)->get();
        $this->eff = DB::table('niveaux')->where('id_spec', $spec[0]->id)->where('niveau', $this->niveau)->get();
        $this->ues = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->get();
        $this->mesues = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->get();
        
    }
    public function render()
    {
        
        return view('livewire.planifier-cours')->layout('layouts.app2');
    }
}
