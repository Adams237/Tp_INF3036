<?php

namespace App\Http\Livewire;

use App\Models\Specialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class FormFiliere extends Component
{
    public $filiere;
    public $specialites;
    public $spec;
    public $idt;
    public $niveau;
    public $niveaux;
    public $effectifs = 0;
    public $choixSpec;

    public function updatedChoixSpec(){

        $this->spec = DB::table('specialites')->where('nom_spec', $this->choixSpec)->get();//recupérer l'id de la spécialité
        $this->effectifs =DB::table('niveaux')->where('id_spec', $this->spec[0]->id)->where('niveau', $this->niveau)->get();//recupérer l'effectif du nieau
        $this->niveaux = DB::table('niveaux')->where('id_spec', $this->spec[0]->id)->where('niveau', $this->niveau)->get();
        
    }

    public function updatedNiveau(){
        if($this->niveau < 3){
            $identifiant = DB::table('filieres')->where('nom_filiere', $this->filiere)->value('id');
            // dd($identifiant);
            $this->effectifs = DB::table('niveaux')->where('id_filiere', $identifiant)->where('niveau', $this->niveau)->value('effectif'); 
            $this->niveaux = DB::table('niveaux')->where('id_filiere', $identifiant)->where('niveau', $this->niveau)->get();    
        }
        else{
            $this->effectif=0;
        }
    }
    public function mount(Request $request){
        $this->filiere = $request->nom;
        
        $this->idt = $request->id;
    }

    public function render()
    {

        $this->specialites = DB::table('specialites')->where('id_filiere', $this->idt)->get();
        return view('livewire.form-filiere')->layout('layouts.app2');
    }
}
