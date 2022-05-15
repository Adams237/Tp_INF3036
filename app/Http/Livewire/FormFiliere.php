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
    public $effectif = 0;
    public $choixSpec;

    public function updatedChoixSpec(){
        // $this->spec = Specialite::where('nomSpec', $this->specialite)->get();
        // $this->specialites = DB::table('specialites')->where('idFiliere', '4')->get();
        // dd($this->identifiant);

        $this->spec = DB::table('specialites')->where('nomSpec', $this->choixSpec)->get();
        // dd($this->spec[0]);
        if($this->niveau >= 3){
            if(!empty($this->spec)){
                $this->effectif = $this->spec[0]->effectifSpec;
            }      
        }
        else{
            $this->effectif=0;
        }
        // dd($this->spec[0]->effectifSpec);
    }

    public function updatedNiveau(){
        if($this->niveau >= 3){
            if(!empty($this->spec)){
                $this->effectif = $this->spec[0]->effectifSpec;
            }      
        }
        else{
            $this->effectif=0;
        }
    }
    public function mount(Request $request){
        $this->filiere = $request->nom;
        
        $this->idt = $request->id;
    }

    public function render(Request $request)
    {
        // dd($this->nom);
       
        
        // $this->idt = '4';
        // $this->spec = DB::table('specialites')->where('nomSpec', $this->specialite)->get();

        $this->specialites = DB::table('specialites')->where('idFiliere', $this->idt)->get();
        return view('livewire.form-filiere')->layout('layouts.app2');
    }
}
