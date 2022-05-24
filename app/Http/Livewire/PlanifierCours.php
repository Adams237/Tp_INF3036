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
    public $matiere1;
    public $eff;
    public $mesues;
    public $mesues2;
    public $matiere2;
    public $mesues3;
    public $matiere3;
    public $matiere4;
    public $mesues4;
    public $salles1;
    public $jour1;
    public $horaire1;
    public $id_salle;
    public $enseignants1;
    public $id_ens;
    public $id_ense;

    public function updatedMatiere3(){
        //recupérer la liste des ues qui n'ont pas encore essayé
        $this->mesues4 = DB::table('ues')->where('id_niveau', $this->eff[0]['id'])->where('nom_ue', '<>', $this->matiere2)->where('nom_ue', '<>', $this->matiere1)->where('nom_ue', '<>', $this->matiere3)->get();
    }

    public function updatedMatiere2(){
        //recupérer la liste des ues qui n'ont pas encore essayé
        $this->mesues3 = DB::table('ues')->where('id_niveau', $this->eff[0]['id'])->where('nom_ue', '<>', $this->matiere2)->where('nom_ue', '<>', $this->matiere1)->get();
        // dd($this->mesues3);
    }

    public function updatedMatiere1(){
        //recupérer la liste des ues qui n'ont pas encore essayé
        $this->mesues2 = DB::table('ues')->where('id_niveau', $this->eff[0]['id'])->where('nom_ue', '<>', $this->matiere1)->get();
        // dd($this->mesues2);
    }

    public function updatedHoraire1(){
        //recupère l'identifiant d
        $this->id_salle = DB::table('cours')->where('jour',  $this->jour1)->where('heure_debut', $this->horaire1)->value('id_salle');
        $this->id_ense = DB::table('cours')->where('jour', $this->jour1)->where('heure_debut', $this->horaire1)->where('id_salle',$this->id_salle)->value('id_ense');
        if(!empty($this->id_salle)){
            $this->salles1 = DB::table('salles')->where('id','<>', $this->id_salle)->get();
        }
        if(!empty($this->id_ense)){
            $this->id_ens = DB::table('enseignements')->where('id', $this->id_ense)->value('id_ens');
            $this->enseignants1 = DB::table('enseignants')->where('id', '<>', $this->id_ens)->get();
        }
    }

    public function updatedJour1(){
         
        $this->id_salle = DB::table('cours')->where('jour', $this->jour1)->where('heure_debut', $this->horaire1)->value('id_salle');
        if(!empty($this->id_salle)){
            $this->salles = DB::table('salles')->where('id','<>', $this->id_salle)->get();
            dd($this->salles[0]);
        }
        
    }

    public function mount(Request $request)
    {
        $this->id_salle = DB::table('cours')->where('jour', $this->jour1)->where('heure_debut', $this->horaire1)->value('id_salle');
        if(!empty($this->id_salle)){
            $this->salles = DB::table('salles')->where('id','<>', $this->id_salle)->get();
        }
        $this->salles = DB::table('salles')->get();
        $this->filiere = $request->filiere;
        $this->niveau = $request->niveau;
        $this->specialites = $request->choixSpec;
        $this->effectif = $request->effectif;
        $spec = DB::table('specialites')->where('nom_spec', $this->specialites)->get();
        $this->eff = DB::table('niveaux')->where('id_spec', $spec[0]->id)->where('niveau', $this->niveau)->get();
        $this->ues = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->get();
        $this->mesues = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->get();
        // $this->mesues2 = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->where('nom_ue', '<>', $this->matiere1)->get();
        
    }
    public function render()
    {
        $this->id_salle = DB::table('cours')->where('jour', $this->jour1)->where('heure_debut', $this->horaire1)->value('id_salle');
        if(!empty($this->id_salle)){
            $this->salles1 = DB::table('salles')->where('id','<>', $this->id_salle)->get();
        }
        else{
            $this->salles1 = DB::table('salles')->get();
        }
        
        $this->id_ense = DB::table('cours')->where('jour', $this->jour1)->where('heure_debut', $this->horaire1)->where('id_salle',$this->id_salle)->value('id_ense');
        if(!empty($this->id_ense)){
            $this->id_ens = DB::table('enseignements')->where('id', $this->id_ense)->value('id_ens');
            $this->enseignants1 = DB::table('enseignants')->where('id', '<>', $this->id_ens)->get();
        }
        else{
            $this->enseignants1 = DB::table('enseignants')->get();
        }
        $spec = DB::table('specialites')->where('nom_spec', $this->specialites)->get();
        $this->eff = DB::table('niveaux')->where('id_spec', $spec[0]->id)->where('niveau', $this->niveau)->get();
        $this->mesues = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->get();
        if(!empty($this->mesues2)){
            $this->mesues2 = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->where('nom_ue', '<>', $this->matiere1)->get();

        }
        if(!empty($this->mesues3)){
            $this->mesues3 = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->where('nom_ue', '<>', $this->matiere2)->where('nom_ue', '<>', $this->matiere1)->get();
        }
        return view('livewire.planifier-cours')->layout('layouts.app2');
    }
}
