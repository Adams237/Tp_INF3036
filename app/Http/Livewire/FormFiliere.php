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
    public $specialite;
    public $spec;
    public $niveau;

    public function updatedSpecialite(){
        // Specialite
        $this->spec = DB::table('specialites')->where('nomSpec', $this->specialite)->get();
        // dd($this->spec[0]->effectifSpec);
    }

//    public function updatedNiveau(){

//    }

    public function render(Request $request)
    {
        $this->filiere = $request->nom;
        // $this->spec = DB::table('specialites')->where('nomSpec', $this->specialite)->get();

        $this->specialites = DB::table('specialites')->where('idFiliere', $request->id)->get();
        return view('livewire.form-filiere')->layout('layouts.app2');
    }
}
