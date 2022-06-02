<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Sidebar extends Component
{
    public $filieres;
    public $enseignants;

    public function afficher(){
        $filiere = DB::table('filieres')->where('nom_filiere', 'CHIMIE')->value('id');
        $niveau = DB::table('niveaux')->where('niveau','2')->where('id_filiere', $filiere)->value('id');
        $ense = DB::table('ues')->join('enseignement_ue', function($join){
            $join->on('enseignement_ue.id_ue', '=', 'ues.id')
            ->where('ues.id_niveau', '=', '6');
        } )->get();
        for($i=0; $i < count($ense); $i++){
            $id_ens[$i] = DB::table('enseignements')->where('id', $ense[$i]->id_ense)->get();
        }
        // dd($id_ens);
        for($i=0; $i< count($id_ens); $i++){
            $id1[$i] = DB::table('cours')->where('id_ense', $id_ens[$i][0]->id)->get();
        }

        }

    public function render()
    {
        $this->filieres = DB::table('filieres')->get(); 
        $this->enseignants = DB::table('enseignants')->orderBy('nom_ens')->get();  
        return view('livewire.sidebar');
    }
}
