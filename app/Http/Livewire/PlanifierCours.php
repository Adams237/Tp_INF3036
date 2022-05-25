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
        //recupère l'identifiant de la salle occupé
        $this->id_salle = DB::table('cours')->where('jour',  $this->jour1)->where('heure_debut', $this->horaire1)->get();
        
        //recupérer l'identifiant de l'enseignant occupé par jour et par salle
        $this->id_ense = DB::table('cours')->where('jour', $this->jour1)->where('heure_debut', $this->horaire1)->value('id_ense');
        if(count($this->id_salle)!=0){ 
            //enlever la salle occupée de la liste des salles à afficher
            $this->salles1 = DB::table('salles')->join('cours', function($join){
                $join->on('salles.id', '=', 'cours.id_salle')
                    ->where('cours.jour', '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
            })->get();

            
            
        }
        if(!empty($this->id_ense)){
            //enlever l'enseignant occupé de la liste des enseignants à afficher
            $this->id_ens = DB::table('enseignements')->where('id', $this->id_ense)->value('id_ens');
            $this->enseignants1 = DB::table('enseignants')->where('id', '<>', $this->id_ens)->get();
        }
    }

    public function updatedJour1(){
         //recupérer la liste des salles occupées
        $this->id_salle = DB::table('cours')->where('jour', $this->jour1)->where('heure_debut', $this->horaire1)->value('id_salle');
        if(!empty($this->id_salle)){
            //afficher les salles libre
            $this->salles = DB::table('salles')->where('id','<>', $this->id_salle)->get();
            dd($this->salles[0]);
        }
        
    }

    public function mount(Request $request)
    {
        //recupérer la liste des salles occupées
        $this->id_salle = DB::table('cours')->where('jour', $this->jour1)->where('heure_debut', $this->horaire1)->get();
        if(count($this->id_salle)!=0){
            //afficher les salles libres
            for($i = 0; $i<count($this->id_salle); $i++){
                $this->salles1 = DB::table('salles')->where('id','<>', $this->id_salle[$i]->id)->get();
            }
        }
        //afficher les salles
        $this->salles = DB::table('salles')->get();
        //recupére le nom de la filiére
        $this->filiere = $request->filiere;
        //recupére le niveau
        $this->niveau = $request->niveau;
        //recupérer la spécialite
        $this->specialites = $request->choixSpec;
        //recupérer l'effectif
        $this->effectif = $request->effectif;
        $spec = DB::table('specialites')->where('nom_spec', $this->specialites)->get();
        $this->eff = DB::table('niveaux')->where('id_spec', $spec[0]->id)->where('niveau', $this->niveau)->get();
        $this->ues = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->get();
        $this->mesues = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->get();
        // $this->mesues2 = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->where('nom_ue', '<>', $this->matiere1)->get();
        
    }
    public function render()
    {
        //recupérer la liste des salles occupées
        $this->id_salle = DB::table('cours')->where('jour', $this->jour1)->where('heure_debut', $this->horaire1)->get();
        if(count($this->id_salle)!=0){
            // dd(count($this->id_salle));
            //afficher les salles libres
            // for($i = 0; $i<count($this->id_salle);$i++){
            //     $this->salles1 = DB::table('salles')->where('id','<>', $this->id_salle[$i]->id_salle)->where('id','<>', $this->id_salle[$i+1]->id_salle)->get();
            //     break;
            // }              
            $this->salles1 = DB::table('salles')->join('cours', function($join){
                $join->on('salles.id', '=', 'cours.id_salle')
                    ->where('cours.jour', '=', $this->jour1)
                    ->where('cours.heure_debut', '= ', $this->horaire1);
                    
            })->select('salles.*')->get();
        }
        else{
            //afficher les salles
            $this->salles1 = DB::table('salles')->get();
        }
        //recupérer les enseignants occupés
        if(count($this->id_salle)==0){
            $this->id_ense = DB::table('cours')->value('id_ense');
        }
        if(!empty($this->id_ense)){
            //afficher les salles libres
            $this->id_ens = DB::table('enseignements')->where('id', $this->id_ense)->value('id_ens');
            $this->enseignants1 = DB::table('enseignants')->where('id', '<>', $this->id_ens)->get();
        }
        else{
            //afficher les salles
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
