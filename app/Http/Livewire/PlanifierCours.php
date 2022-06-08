<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanifierCours extends Component
{
    public $nbre_ue2;
    public $nbre_ue3;
    public $nbre_ue4;
    public $nbre_ue5;
    public $nbre_ue6;
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
    public $salles1;
    public $jour1;
    public $horaire1;
    public $id_salle1;
    public $enseignants1;
    public $id_ens;
    public $id_ense;
    public $salles;
    public $enseignants;
    public $salle1;
    public $enseignant1;
    //variable du 2e enregistrement
    public $jour2;
    public $horaire2;
    public $enseignant2;
    public $salle2;
    public $enseignants2;
    public $salles2;
    public $id_salle2;
    public $i = 0;
    //variables du 3e enregistrement
    public $horaire3;
    public $salle3;
    public $jour3;
    public $enseignant3;
    public $enseignants3;
    public $salles3;
    public $id_salle3;
    //variable du 4e enregistrement
    public $matiere4;
    public $mesues4;
    public $horaire4;
    public $salle4;
    public $jour4;
    public $enseignant4;
    public $enseignants4;
    public $salles4;
    public $id_salle4;

    //variable du 5e enregistrement
    public $matiere5;
    public $mesues5;
    public $horaire5;
    public $salle5;
    public $jour5;
    public $enseignant5;
    public $enseignants5;
    public $salles5;
    public $id_salle5;

    //variables du 6e enregistrement
    public $matiere6;
    public $mesues6;
    public $horaire6;
    public $salle6;
    public $jour6;
    public $enseignant6;
    public $enseignants6;
    public $salles6;
    public $id_salle6;

    //variable 7e enregistrement
    public $matiere7;
    public $mesues7;
    public $horaire7;
    public $salle7;
    public $jour7;
    public $enseignant7;
    public $enseignants7;
    public $salles7;
    public $id_salle7;
    public $nbre_ue7;


    //variable 8e enregistrement
    public $matiere8;
    public $mesues8;
    public $horaire8;
    public $salle8;
    public $jour8;
    public $enseignant8;
    public $enseignants8;
    public $salles8;
    public $id_salle8;
    public $nbre_ue8;

    //variabke 9e enregistrement
    public $matiere9;
    public $mesues9;
    public $horaire9;
    public $salle9;
    public $jour9;
    public $enseignant9;
    public $enseignants9;
    public $salles9;
    public $id_salle9;
    public $nbre_ue9;



    //hook 9e enregistrement
    public function updatedMatiere9(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedEnseignant9(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedHoraire9(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
        
    }

    public function updatedJour9(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedSalle9(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }


    //hook du 8e enregistrement

    public function updatedMatiere8(){
        $this->mesues9 = DB::table('ues')->where('id_niveau', $this->eff[0]['id'])->where('id', '<>', $this->matiere8)->where('id', '<>', $this->matiere7)->where('id', '<>', $this->matiere6)->where('id', '<>', $this->matiere5)->where('id', '<>', $this->matiere4)->where('id', '<>', $this->matiere3)->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        $this->nbre_ue9 = count($this->mesues9);
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedEnseignant8(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedHoraire8(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
        
    }

    public function updatedJour8(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedSalle8(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    //hook 7e enregistrement
    public function updatedMatiere7(){
        $this->mesues8 = DB::table('ues')->where('id_niveau', $this->eff[0]['id'])->where('id', '<>', $this->matiere7)->where('id', '<>', $this->matiere6)->where('id', '<>', $this->matiere5)->where('id', '<>', $this->matiere4)->where('id', '<>', $this->matiere3)->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        $this->nbre_ue8 = count($this->mesues8);
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedEnseignant7(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedHoraire7(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
        
    }

    public function updatedJour7(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedSalle7(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    //hook du 6e enregistrement

    public function updatedMatiere6(){
        $this->mesues7 = DB::table('ues')->where('id_niveau', $this->eff[0]['id'])->where('id', '<>', $this->matiere6)->where('id', '<>', $this->matiere5)->where('id', '<>', $this->matiere4)->where('id', '<>', $this->matiere3)->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        $this->nbre_ue7 = count($this->mesues7);
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedEnseignant6(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedHoraire6(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
        
    }

    public function updatedJour6(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedSalle6(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    //hook du 5e enregistrement
    public function updatedMatiere5(){
        $this->mesues6 = DB::table('ues')->where('id_niveau', $this->eff[0]['id'])->where('id', '<>', $this->matiere5)->where('id', '<>', $this->matiere4)->where('id', '<>', $this->matiere3)->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        $this->nbre_ue6 = count($this->mesues6);
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedEnseignant5(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedHoraire5(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
        
    }

    public function updatedJour5(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedSalle5(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    //hook du 4e enregistrement

    public function updatedMatiere4(){
        $this->mesues5 = DB::table('ues')->where('id_niveau', $this->eff[0]['id'])->where('id', '<>', $this->matiere4)->where('id', '<>', $this->matiere3)->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        $this->nbre_ue5 = count($this->mesues5);
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedEnseignant4(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedHoraire4(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
        
    }

    public function updatedJour4(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedSalle4(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    //hook du 3e enrgistement
    
    public function updatedMatiere3(){
        $this->mesues4 = DB::table('ues')->where('id_niveau', $this->eff[0]['id'])->where('id', '<>', $this->matiere3)->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        $this->nbre_ue4 = count($this->mesues4);
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }


    public function updatedEnseignant3(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedSalle3(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedJour3(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedHoraire3(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
        
    }

    // hooks qui traivaillent sur le 2e enregistrement
    public function updatedEnseignant2(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedSalle2(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedJour2(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }
    public function updatedHoraire2(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
        
    }
    public function updatedMatiere2(){
        //recupérer la liste des ues qui n'ont pas encore essayé
        
        $this->mesues3 = DB::table('ues')->where('id_niveau', $this->eff[0]['id'])->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        $this->nbre_ue3 = count($this->mesues3);
        if( count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
        // dd($this->salles1);
    }

    //hooks qui travaillent sur le 1er enregistrement

    public function updatedMatiere1(){
        //recupérer la liste des ues qui n'ont pas encore essayé
        $this->mesues2 = DB::table('ues')->where('id_niveau', $this->eff[0]['id'])->where('id', '<>', $this->matiere1)->get();
        $this->nbre_ue2 = count($this->mesues2);
        if( count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
        // dd($this->mesues2);
    }
    public function updatedSalle1(){
        if( count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }

    public function updatedEnseignant1(){
        if(count($this->id_salle1)!=0){
            $this->i = 1;
        }
        else{
            $this->i = 0;
        }
    }
    
    public function updatedHoraire1(){
        //recupère l'identifiant de la salle occupé
        $this->i=0;
        $this->id_salle1 = DB::table('cours')->where('jour', $this->jour1)->where('heure_debut', $this->horaire1)->get();
        if(count($this->id_salle1)!=0){
            
            if(count($this->id_salle1)==1){
                // dd('con1');
                //enlever les salles occupées
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ense)->orderBy('nom_ens')->get();
            }
            if(count($this->id_salle1)==2){
                // dd('con2');
                
                //enlever les salles occupées
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[0]->id_ens)->orderBy('nom_ens')->get();
               
            }
            if(count($this->id_salle1)==3){
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->get();
                
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->orderBy('nom_ens')->get();
            }
            if(count($this->id_salle1)==4){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->orderBy('nom_ens')->get();
            }
            if(count($this->id_salle1)==5){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->where('id', '<>', $this->id_salle1[4]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->where('id','<>', $id_ens[4]->id_ens)->orderBy('nom_ens')->get();
            }
            if(count($this->id_salle1)==6){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->where('id', '<>', $this->id_salle1[4]->id_salle)->where('id', '<>', $this->id_salle1[5]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->where('id','<>', $id_ens[4]->id_ens)->where('id','<>', $id_ens[5]->id_ens)->orderBy('nom_ens')->get();
            }
            if(count($this->id_salle1)==7){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->where('id', '<>', $this->id_salle1[4]->id_salle)->where('id', '<>', $this->id_salle1[5]->id_salle)->where('id', '<>', $this->id_salle1[6]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->where('id','<>', $id_ens[4]->id_ens)->where('id','<>', $id_ens[5]->id_ens)->where('id','<>', $id_ens[6]->id_ens)->orderBy('nom_ens')->get();
            }
            if(count($this->id_salle1)==8){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->where('id', '<>', $this->id_salle1[4]->id_salle)->where('id', '<>', $this->id_salle1[5]->id_salle)->where('id', '<>', $this->id_salle1[6]->id_salle)->where('id', '<>', $this->id_salle1[7]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->where('id','<>', $id_ens[4]->id_ens)->where('id','<>', $id_ens[5]->id_ens)->where('id','<>', $id_ens[6]->id_ens)->where('id','<>', $id_ens[7]->id_ens)->orderBy('nom_ens')->get();
            }
            if(count($this->id_salle1)==9){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->where('id', '<>', $this->id_salle1[4]->id_salle)->where('id', '<>', $this->id_salle1[5]->id_salle)->where('id', '<>', $this->id_salle1[6]->id_salle)->where('id', '<>', $this->id_salle1[7]->id_salle)->where('id', '<>', $this->id_salle1[8]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->where('id','<>', $id_ens[4]->id_ens)->where('id','<>', $id_ens[5]->id_ens)->where('id','<>', $id_ens[6]->id_ens)->where('id','<>', $id_ens[7]->id_ens)->where('id','<>', $id_ens[8]->id_ens)->orderBy('nom_ens')->get();
            }
            if(count($this->id_salle1)==10){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->where('id', '<>', $this->id_salle1[4]->id_salle)->where('id', '<>', $this->id_salle1[5]->id_salle)->where('id', '<>', $this->id_salle1[6]->id_salle)->where('id', '<>', $this->id_salle1[7]->id_salle)->where('id', '<>', $this->id_salle1[8]->id_salle)->where('id', '<>', $this->id_salle1[9]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->where('id','<>', $id_ens[4]->id_ens)->where('id','<>', $id_ens[5]->id_ens)->where('id','<>', $id_ens[6]->id_ens)->where('id','<>', $id_ens[7]->id_ens)->where('id','<>', $id_ens[8]->id_ens)->where('id','<>', $id_ens[9]->id_ens)->orderBy('nom_ens')->get();
            }
            
        }
        else{
            //afficher les salles
            $this->salles = DB::table('salles')->get();
            $this->enseignants = DB::table('enseignants')->orderBy('nom_ens')->get();
        }    
        
    }
    

    public function updatedJour1(){
         //recupérer la liste des salles occupées
         $this->i=0;
        $this->id_salle1 = DB::table('cours')->where('jour', $this->jour1)->where('heure_debut', $this->horaire1)->get();
        if(count($this->id_salle1)!=0){
            
            if(count($this->id_salle1)==1){
                dd('con1');
                //enlever les salles occupées
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ense)->get();
            }
            if(count($this->id_salle1)==2){
                dd('con2');
                
                //enlever les salles occupées
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[0]->id_ens)->get();
               
            }
            if(count($this->id_salle1)==3){
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->get();
                
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->get();
            }
            if(count($this->id_salle1)==4){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->get();
            }
            if(count($this->id_salle1)==5){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->where('id', '<>', $this->id_salle1[4]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->where('id','<>', $id_ens[4]->id_ens)->get();
            }
            if(count($this->id_salle1)==6){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->where('id', '<>', $this->id_salle1[4]->id_salle)->where('id', '<>', $this->id_salle1[5]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->where('id','<>', $id_ens[4]->id_ens)->where('id','<>', $id_ens[5]->id_ens)->get();
            }
            if(count($this->id_salle1)==7){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->where('id', '<>', $this->id_salle1[4]->id_salle)->where('id', '<>', $this->id_salle1[5]->id_salle)->where('id', '<>', $this->id_salle1[6]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->where('id','<>', $id_ens[4]->id_ens)->where('id','<>', $id_ens[5]->id_ens)->where('id','<>', $id_ens[6]->id_ens)->get();
            }
            if(count($this->id_salle1)==8){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->where('id', '<>', $this->id_salle1[4]->id_salle)->where('id', '<>', $this->id_salle1[5]->id_salle)->where('id', '<>', $this->id_salle1[6]->id_salle)->where('id', '<>', $this->id_salle1[7]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->where('id','<>', $id_ens[4]->id_ens)->where('id','<>', $id_ens[5]->id_ens)->where('id','<>', $id_ens[6]->id_ens)->where('id','<>', $id_ens[7]->id_ens)->get();
            }
            if(count($this->id_salle1)==9){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->where('id', '<>', $this->id_salle1[4]->id_salle)->where('id', '<>', $this->id_salle1[5]->id_salle)->where('id', '<>', $this->id_salle1[6]->id_salle)->where('id', '<>', $this->id_salle1[7]->id_salle)->where('id', '<>', $this->id_salle1[8]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->where('id','<>', $id_ens[4]->id_ens)->where('id','<>', $id_ens[5]->id_ens)->where('id','<>', $id_ens[6]->id_ens)->where('id','<>', $id_ens[7]->id_ens)->where('id','<>', $id_ens[8]->id_ens)->get();
            }
            if(count($this->id_salle1)==10){
                
                $this->salles = DB::table('salles')->where('id', '<>', $this->id_salle1[0]->id_salle)->where('id', '<>', $this->id_salle1[1]->id_salle)->where('id', '<>', $this->id_salle1[2]->id_salle)->where('id', '<>', $this->id_salle1[3]->id_salle)->where('id', '<>', $this->id_salle1[4]->id_salle)->where('id', '<>', $this->id_salle1[5]->id_salle)->where('id', '<>', $this->id_salle1[6]->id_salle)->where('id', '<>', $this->id_salle1[7]->id_salle)->where('id', '<>', $this->id_salle1[8]->id_salle)->where('id', '<>', $this->id_salle1[9]->id_salle)->get();
                //enlever l'enseignant occupé de la liste des enseignants à afficher
                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                    $join->on('enseignements.id', '=', 'cours.id_ense')
                    ->where('cours.jour' , '=', $this->jour1)
                    ->where('cours.heure_debut', '=', $this->horaire1);
                })->get();
                $this->enseignants = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id','<>', $id_ens[1]->id_ens)->where('id','<>', $id_ens[2]->id_ens)->where('id','<>', $id_ens[3]->id_ens)->where('id','<>', $id_ens[4]->id_ens)->where('id','<>', $id_ens[5]->id_ens)->where('id','<>', $id_ens[6]->id_ens)->where('id','<>', $id_ens[7]->id_ens)->where('id','<>', $id_ens[8]->id_ens)->where('id','<>', $id_ens[9]->id_ens)->get();
            }
            
        }
        else{
            //afficher les salles
            $this->salles = DB::table('salles')->get();
            $this->enseignants = DB::table('enseignants')->get();
        }  
        
    }

    public function mount(Request $request)
    {
        //recupére le nom de la filiére
        $this->filiere = $request->filiere;
        //recupére le niveau
        $this->niveau = $request->niveau;
        //recupérer la spécialite
        $this->specialites = $request->choixSpec;
        //recupérer l'effectif
        $this->effectif = $request->effectif;
        
    }
    public function render()
    {
        // on travaille sur les premiere enregistrement
        //recupérer la liste des salles occupées
        $this->id_salle1 = DB::table('cours')->where('jour', $this->jour1)->where('heure_debut', $this->horaire1)->get();
        if(count($this->id_salle1)!=0){
            $this->salles1 = $this->salles;
            // dd($this->i);
            $this->enseignants1 = $this->enseignants;       
        }
        else{
            //afficher les salles
            $this->salles1 = DB::table('salles')->get();
            //afficher les salles
            $this->enseignants1 = DB::table('enseignants')->orderBy('nom_ens')->get();
        }
        //on travaille sur le 2 enregistrement
        if(!empty($this->jour1) and !empty($this->horaire1)){
            if($this->jour2==$this->jour1 and $this->horaire2==$this->horaire1){
                $this->salles2=[];
                $this->enseignants2=[];
            }
            else{
                $this->id_salle2 = DB::table('cours')->where('jour', $this->jour2)->where('heure_debut', $this->horaire2)->get();
                if(count($this->id_salle2)!=0){
                    //  dd($this->id_salle2);
                        if(count($this->id_salle2)==1){
                                //enlever les salles occupées
                                $this->salles2 = DB::table('salles')->where('id', '<>', $this->id_salle2[0]->id_salle)->where('id', '<>', $this->salle1)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour2)
                                    ->where('cours.heure_debut', '=', $this->horaire2);
                                })->get();
                                $this->enseignants2 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ense)->where('id', '<>', $this->enseignant1)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle2)==2){
                                //enlever les salles occupées
                                $this->salles2 = DB::table('salles')->where('id', '<>', $this->id_salle2[0]->id_salle)->where('id', '<>', $this->id_salle2[1]->id_salle)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour2)
                                    ->where('cours.heure_debut', '=', $this->horaire2);
                                })->get();
                                $this->enseignants2 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle2)==3){
                            //enlever les salles occupées
                            $this->salles2 = DB::table('salles')->where('id', '<>', $this->id_salle2[0]->id_salle)->where('id', '<>', $this->id_salle2[1]->id_salle)->where('id', '<>', $this->id_salle2[2]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour2)
                                ->where('cours.heure_debut', '=', $this->horaire2);
                            })->get();
                            $this->enseignants2 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle2)==4){
                            //enlever les salles occupées
                            $this->salles2 = DB::table('salles')->where('id', '<>', $this->id_salle2[0]->id_salle)->where('id', '<>', $this->id_salle2[1]->id_salle)->where('id', '<>', $this->id_salle2[2]->id_salle)->where('id', '<>', $this->id_salle2[3]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour2)
                                ->where('cours.heure_debut', '=', $this->horaire2);
                            })->get();
                            $this->enseignants2 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle2)==5){
                            //enlever les salles occupées
                            $this->salles2 = DB::table('salles')->where('id', '<>', $this->id_salle2[0]->id_salle)->where('id', '<>', $this->id_salle2[1]->id_salle)->where('id', '<>', $this->id_salle2[2]->id_salle)->where('id', '<>', $this->id_salle2[3]->id_salle)->where('id', '<>', $this->id_salle2[4]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour2)
                                ->where('cours.heure_debut', '=', $this->horaire2);
                            })->get();
                            $this->enseignants2 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle2)==6){
                            //enlever les salles occupées
                            $this->salles2 = DB::table('salles')->where('id', '<>', $this->id_salle2[0]->id_salle)->where('id', '<>', $this->id_salle2[1]->id_salle)->where('id', '<>', $this->id_salle2[2]->id_salle)->where('id', '<>', $this->id_salle2[3]->id_salle)->where('id', '<>', $this->id_salle2[4]->id_salle)->where('id', '<>', $this->id_salle2[5]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour2)
                                ->where('cours.heure_debut', '=', $this->horaire2);
                            })->get();
                            $this->enseignants2 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle2)==7){
                            //enlever les salles occupées
                            $this->salles2 = DB::table('salles')->where('id', '<>', $this->id_salle2[0]->id_salle)->where('id', '<>', $this->id_salle2[1]->id_salle)->where('id', '<>', $this->id_salle2[2]->id_salle)->where('id', '<>', $this->id_salle2[3]->id_salle)->where('id', '<>', $this->id_salle2[4]->id_salle)->where('id', '<>', $this->id_salle2[5]->id_salle)->where('id', '<>', $this->id_salle2[6]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour2)
                                ->where('cours.heure_debut', '=', $this->horaire2);
                            })->get();
                            $this->enseignants2 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle2)==8){
                            //enlever les salles occupées
                            $this->salles2 = DB::table('salles')->where('id', '<>', $this->id_salle2[0]->id_salle)->where('id', '<>', $this->id_salle2[1]->id_salle)->where('id', '<>', $this->id_salle2[2]->id_salle)->where('id', '<>', $this->id_salle2[3]->id_salle)->where('id', '<>', $this->id_salle2[4]->id_salle)->where('id', '<>', $this->id_salle2[5]->id_salle)->where('id', '<>', $this->id_salle2[6]->id_salle)->where('id', '<>', $this->id_salle2[7]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour2)
                                ->where('cours.heure_debut', '=', $this->horaire2);
                            })->get();
                            $this->enseignants2 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle2)==9){
                            //enlever les salles occupées
                            $this->salles2 = DB::table('salles')->where('id', '<>', $this->id_salle2[0]->id_salle)->where('id', '<>', $this->id_salle2[1]->id_salle)->where('id', '<>', $this->id_salle2[2]->id_salle)->where('id', '<>', $this->id_salle2[3]->id_salle)->where('id', '<>', $this->id_salle2[4]->id_salle)->where('id', '<>', $this->id_salle2[5]->id_salle)->where('id', '<>', $this->id_salle2[6]->id_salle)->where('id', '<>', $this->id_salle2[7]->id_salle)->where('id', '<>', $this->id_salle2[8]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour2)
                                ->where('cours.heure_debut', '=', $this->horaire2);
                            })->get();
                            $this->enseignants2 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle2)==10){
                            //enlever les salles occupées
                            $this->salles2 = DB::table('salles')->where('id', '<>', $this->id_salle2[0]->id_salle)->where('id', '<>', $this->id_salle2[1]->id_salle)->where('id', '<>', $this->id_salle2[2]->id_salle)->where('id', '<>', $this->id_salle2[3]->id_salle)->where('id', '<>', $this->id_salle2[4]->id_salle)->where('id', '<>', $this->id_salle2[5]->id_salle)->where('id', '<>', $this->id_salle2[6]->id_salle)->where('id', '<>', $this->id_salle2[7]->id_salle)->where('id', '<>', $this->id_salle2[8]->id_salle)->where('id', '<>', $this->id_salle2[9]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour2)
                                ->where('cours.heure_debut', '=', $this->horaire2);
                            })->get();
                            $this->enseignants2 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->where('id', '<>', $id_ens[9]->id_ens)->orderBy('nom_ens')->get();
                        }
                        
                }
                else{
                        $this->salles2 = DB::table('salles')->get();
                         //afficher les salles
                         $this->enseignants2 = DB::table('enseignants')->orderBy('nom_ens')->get();
                }
            }
        }
              
        $spec = DB::table('specialites')->where('nom_spec', $this->specialites)->get();
        $id_filiere = DB::table('filieres')->where('nom_filiere', $this->filiere)->get();
        // dd($id_fi);
        if(count($spec)!=0){
            $this->eff = DB::table('niveaux')->where('id_spec', $spec[0]->id)->where('niveau', $this->niveau)->where('id_filiere', $id_filiere[0]->id)->get();
        }
        else{
            $this->eff = DB::table('niveaux')->where('niveau', $this->niveau)->where('id_filiere', $id_filiere[0]->id)->get();
            // dd($this->eff);
        }
        //on travaille sur la 3e enregistrement
        if(!empty($this->jour2) and !empty($this->horaire2)){
            if(($this->jour3 == $this->jour2 and $this->horaire3 == $this->horaire2) or ($this->jour3 ==$this->jour1 and $this->horaire3 ==$this->horaire1)){
                $this->salles3 = [];
                $this->enseignants3 = [];
            }
            else{
                $this->id_salle3 = DB::table('cours')->where('jour', $this->jour3)->where('heure_debut', $this->horaire3)->get();
                if(count($this->id_salle3)!=0){
                    //  dd($this->id_sall2);
                        if(count($this->id_salle3)==1){
                                //enlever les salles occupées
                                $this->salles3 = DB::table('salles')->where('id', '<>', $this->id_salle3[0]->id_salle)->where('id', '<>', $this->salle1)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour3)
                                    ->where('cours.heure_debut', '=', $this->horaire3);
                                })->get();
                                $this->enseignants3 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ense)->where('id', '<>', $this->enseignant1)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle3)==2){
                                //enlever les salles occupées
                                $this->salles3 = DB::table('salles')->where('id', '<>', $this->id_salle3[0]->id_salle)->where('id', '<>', $this->id_salle3[1]->id_salle)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour3)
                                    ->where('cours.heure_debut', '=', $this->horaire3);
                                })->get();
                                $this->enseignants3 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle3)==3){
                            //enlever les salles occupées
                            $this->salles3 = DB::table('salles')->where('id', '<>', $this->id_salle3[0]->id_salle)->where('id', '<>', $this->id_salle3[1]->id_salle)->where('id', '<>', $this->id_salle3[2]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour3)
                                ->where('cours.heure_debut', '=', $this->horaire3);
                            })->get();
                            $this->enseignants3 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle3)==4){
                            //enlever les salles occupées
                            $this->salles3 = DB::table('salles')->where('id', '<>', $this->id_salle3[0]->id_salle)->where('id', '<>', $this->id_salle3[1]->id_salle)->where('id', '<>', $this->id_salle3[2]->id_salle)->where('id', '<>', $this->id_salle3[3]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour3)
                                ->where('cours.heure_debut', '=', $this->horaire3);
                            })->get();
                            $this->enseignants3 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle3)==5){
                            //enlever les salles occupées
                            $this->salles3 = DB::table('salles')->where('id', '<>', $this->id_salle3[0]->id_salle)->where('id', '<>', $this->id_salle3[1]->id_salle)->where('id', '<>', $this->id_salle3[2]->id_salle)->where('id', '<>', $this->id_salle3[3]->id_salle)->where('id', '<>', $this->id_salle3[4]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour3)
                                ->where('cours.heure_debut', '=', $this->horaire3);
                            })->get();
                            $this->enseignants3 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle3)==6){
                            //enlever les salles occupées
                            $this->salles3 = DB::table('salles')->where('id', '<>', $this->id_salle3[0]->id_salle)->where('id', '<>', $this->id_salle3[1]->id_salle)->where('id', '<>', $this->id_salle3[2]->id_salle)->where('id', '<>', $this->id_salle3[3]->id_salle)->where('id', '<>', $this->id_salle3[4]->id_salle)->where('id', '<>', $this->id_salle3[5]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour3)
                                ->where('cours.heure_debut', '=', $this->horaire3);
                            })->get();
                            $this->enseignants3 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle3)==7){
                            //enlever les salles occupées
                            $this->salles3 = DB::table('salles')->where('id', '<>', $this->id_salle3[0]->id_salle)->where('id', '<>', $this->id_salle3[1]->id_salle)->where('id', '<>', $this->id_salle3[2]->id_salle)->where('id', '<>', $this->id_salle3[3]->id_salle)->where('id', '<>', $this->id_salle3[4]->id_salle)->where('id', '<>', $this->id_salle3[5]->id_salle)->where('id', '<>', $this->id_salle3[6]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour3)
                                ->where('cours.heure_debut', '=', $this->horaire3);
                            })->get();
                            $this->enseignants3 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle3)==8){
                            //enlever les salles occupées
                            $this->salles3 = DB::table('salles')->where('id', '<>', $this->id_salle3[0]->id_salle)->where('id', '<>', $this->id_salle3[1]->id_salle)->where('id', '<>', $this->id_salle3[2]->id_salle)->where('id', '<>', $this->id_salle3[3]->id_salle)->where('id', '<>', $this->id_salle3[4]->id_salle)->where('id', '<>', $this->id_salle3[5]->id_salle)->where('id', '<>', $this->id_salle3[6]->id_salle)->where('id', '<>', $this->id_salle3[7]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour3)
                                ->where('cours.heure_debut', '=', $this->horaire3);
                            })->get();
                            $this->enseignants3 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle3)==9){
                            //enlever les salles occupées
                            $this->salles3 = DB::table('salles')->where('id', '<>', $this->id_salle3[0]->id_salle)->where('id', '<>', $this->id_salle3[1]->id_salle)->where('id', '<>', $this->id_salle3[2]->id_salle)->where('id', '<>', $this->id_salle3[3]->id_salle)->where('id', '<>', $this->id_salle3[4]->id_salle)->where('id', '<>', $this->id_salle3[5]->id_salle)->where('id', '<>', $this->id_salle3[6]->id_salle)->where('id', '<>', $this->id_salle3[7]->id_salle)->where('id', '<>', $this->id_salle3[8]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour3)
                                ->where('cours.heure_debut', '=', $this->horaire3);
                            })->get();
                            $this->enseignants3 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle3)==10){
                            //enlever les salles occupées
                            $this->salles3 = DB::table('salles')->where('id', '<>', $this->id_salle3[0]->id_salle)->where('id', '<>', $this->id_salle3[1]->id_salle)->where('id', '<>', $this->id_salle3[2]->id_salle)->where('id', '<>', $this->id_salle3[3]->id_salle)->where('id', '<>', $this->id_salle3[4]->id_salle)->where('id', '<>', $this->id_salle3[5]->id_salle)->where('id', '<>', $this->id_salle3[6]->id_salle)->where('id', '<>', $this->id_salle3[7]->id_salle)->where('id', '<>', $this->id_salle3[8]->id_salle)->where('id', '<>', $this->id_salle3[9]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour3)
                                ->where('cours.heure_debut', '=', $this->horaire3);
                            })->get();
                            $this->enseignants3 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->where('id', '<>', $id_ens[9]->id_ens)->orderBy('nom_ens')->get();
                        }
                        
                }
                else{
                    $this->salles3 = DB::table('salles')->get();
                    $this->enseignants3 = DB::table('enseignants')->orderBy('nom_ens')->get();
                }
            }
            
            
        }
        

        //on travaille sur 4e enregistrement
        if(!empty($this->jour3) and !empty($this->horaire3)){
            if(($this->jour4 == $this->jour3 and $this->horaire4 == $this->horaire3) or ($this->jour4 ==$this->jour2 and $this->horaire4 ==$this->horaire2) or ($this->jour4 ==$this->jour1 and $this->horaire4 ==$this->horaire1)){
                $this->salles4 = [];
                $this->enseignants4 = [];
            }
            else{
                $this->id_salle4 = DB::table('cours')->where('jour', $this->jour4)->where('heure_debut', $this->horaire4)->get();
                if(count($this->id_salle4)!=0){
                    //  dd($this->id_sall2);
                        if(count($this->id_salle4)==1){
                                //enlever les salles occupées
                                $this->salles4 = DB::table('salles')->where('id', '<>', $this->id_salle4[0]->id_salle)->where('id', '<>', $this->salle1)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour4)
                                    ->where('cours.heure_debut', '=', $this->horaire4);
                                })->get();
                                $this->enseignants4 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ense)->where('id', '<>', $this->enseignant1)->get();
                        }
                        if(count($this->id_salle4)==2){
                                //enlever les salles occupées
                                $this->salles4 = DB::table('salles')->where('id', '<>', $this->id_salle4[0]->id_salle)->where('id', '<>', $this->id_salle4[1]->id_salle)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour4)
                                    ->where('cours.heure_debut', '=', $this->horaire4);
                                })->get();
                                $this->enseignants4 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle4)==3){
                            //enlever les salles occupées
                            $this->salles4 = DB::table('salles')->where('id', '<>', $this->id_salle4[0]->id_salle)->where('id', '<>', $this->id_salle4[1]->id_salle)->where('id', '<>', $this->id_salle4[2]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour4)
                                ->where('cours.heure_debut', '=', $this->horaire4);
                            })->get();
                            $this->enseignants4 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle4)==4){
                            //enlever les salles occupées
                            $this->salles4 = DB::table('salles')->where('id', '<>', $this->id_salle4[0]->id_salle)->where('id', '<>', $this->id_salle4[1]->id_salle)->where('id', '<>', $this->id_salle4[2]->id_salle)->where('id', '<>', $this->id_salle4[3]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour4)
                                ->where('cours.heure_debut', '=', $this->horaire4);
                            })->get();
                            $this->enseignants4 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle4)==5){
                            //enlever les salles occupées
                            $this->salles4 = DB::table('salles')->where('id', '<>', $this->id_salle4[0]->id_salle)->where('id', '<>', $this->id_salle4[1]->id_salle)->where('id', '<>', $this->id_salle4[2]->id_salle)->where('id', '<>', $this->id_salle4[3]->id_salle)->where('id', '<>', $this->id_salle4[4]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour4)
                                ->where('cours.heure_debut', '=', $this->horaire4);
                            })->get();
                            $this->enseignants4 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle4)==6){
                            //enlever les salles occupées
                            $this->salles4 = DB::table('salles')->where('id', '<>', $this->id_salle4[0]->id_salle)->where('id', '<>', $this->id_salle4[1]->id_salle)->where('id', '<>', $this->id_salle4[2]->id_salle)->where('id', '<>', $this->id_salle4[3]->id_salle)->where('id', '<>', $this->id_salle4[4]->id_salle)->where('id', '<>', $this->id_salle4[5]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour4)
                                ->where('cours.heure_debut', '=', $this->horaire4);
                            })->get();
                            $this->enseignants4 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle4)==7){
                            //enlever les salles occupées
                            $this->salles4 = DB::table('salles')->where('id', '<>', $this->id_salle4[0]->id_salle)->where('id', '<>', $this->id_salle4[1]->id_salle)->where('id', '<>', $this->id_salle4[2]->id_salle)->where('id', '<>', $this->id_salle4[3]->id_salle)->where('id', '<>', $this->id_salle4[4]->id_salle)->where('id', '<>', $this->id_salle4[5]->id_salle)->where('id', '<>', $this->id_salle4[6]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour4)
                                ->where('cours.heure_debut', '=', $this->horaire4);
                            })->get();
                            $this->enseignants4 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle4)==8){
                            //enlever les salles occupées
                            $this->salles4 = DB::table('salles')->where('id', '<>', $this->id_salle4[0]->id_salle)->where('id', '<>', $this->id_salle4[1]->id_salle)->where('id', '<>', $this->id_salle4[2]->id_salle)->where('id', '<>', $this->id_salle4[3]->id_salle)->where('id', '<>', $this->id_salle4[4]->id_salle)->where('id', '<>', $this->id_salle4[5]->id_salle)->where('id', '<>', $this->id_salle4[6]->id_salle)->where('id', '<>', $this->id_salle4[7]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour4)
                                ->where('cours.heure_debut', '=', $this->horaire4);
                            })->get();
                            $this->enseignants4 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle4)==9){
                            //enlever les salles occupées
                            $this->salles4 = DB::table('salles')->where('id', '<>', $this->id_salle4[0]->id_salle)->where('id', '<>', $this->id_salle4[1]->id_salle)->where('id', '<>', $this->id_salle4[2]->id_salle)->where('id', '<>', $this->id_salle4[3]->id_salle)->where('id', '<>', $this->id_salle4[4]->id_salle)->where('id', '<>', $this->id_salle4[5]->id_salle)->where('id', '<>', $this->id_salle4[6]->id_salle)->where('id', '<>', $this->id_salle4[7]->id_salle)->where('id', '<>', $this->id_salle4[8]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour4)
                                ->where('cours.heure_debut', '=', $this->horaire4);
                            })->get();
                            $this->enseignants4 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle4)==10){
                            //enlever les salles occupées
                            $this->salles4 = DB::table('salles')->where('id', '<>', $this->id_salle4[0]->id_salle)->where('id', '<>', $this->id_salle4[1]->id_salle)->where('id', '<>', $this->id_salle4[2]->id_salle)->where('id', '<>', $this->id_salle4[3]->id_salle)->where('id', '<>', $this->id_salle4[4]->id_salle)->where('id', '<>', $this->id_salle4[5]->id_salle)->where('id', '<>', $this->id_salle4[6]->id_salle)->where('id', '<>', $this->id_salle4[7]->id_salle)->where('id', '<>', $this->id_salle4[8]->id_salle)->where('id', '<>', $this->id_salle4[9]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour4)
                                ->where('cours.heure_debut', '=', $this->horaire4);
                            })->get();
                            $this->enseignants4 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->where('id', '<>', $id_ens[9]->id_ens)->orderBy('nom_ens')->get();
                        }
                        
                }
                else{
                    $this->salles4 = DB::table('salles')->get();
                    $this->enseignants4 = DB::table('enseignants')->orderBy('nom_ens')->get();
                }
            }
        }
        
        //on travaille sur le 5e enregistrement
        if(!empty($this->jour4) and !empty($this->horaire4)){
            if(($this->jour5 == $this->jour4 and $this->horaire5 == $this->horaire4) or ($this->jour5 ==$this->jour3 and $this->horaire5 ==$this->horaire3) or ($this->jour5 ==$this->jour2 and $this->horaire5 ==$this->horaire2) or ($this->jour5 ==$this->jour1 and $this->horaire5 ==$this->horaire1)){
                $this->salles5 = [];
                $this->enseignants5 = [];
            }
            else{
                $this->id_salle5 = DB::table('cours')->where('jour', $this->jour5)->where('heure_debut', $this->horaire5)->get();
                if(count($this->id_salle5)!=0){
                    //  dd($this->id_sall2);
                        if(count($this->id_salle5)==1){
                                //enlever les salles occupées
                                $this->salles5 = DB::table('salles')->where('id', '<>', $this->id_salle5[0]->id_salle)->where('id', '<>', $this->salle1)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour5)
                                    ->where('cours.heure_debut', '=', $this->horaire5);
                                })->get();
                                $this->enseignants5 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ense)->where('id', '<>', $this->enseignant1)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle5)==2){
                                //enlever les salles occupées
                                $this->salles5 = DB::table('salles')->where('id', '<>', $this->id_salle5[0]->id_salle)->where('id', '<>', $this->id_salle5[1]->id_salle)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour5)
                                    ->where('cours.heure_debut', '=', $this->horaire5);
                                })->get();
                                $this->enseignants5 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle5)==3){
                            //enlever les salles occupées
                            $this->salles5 = DB::table('salles')->where('id', '<>', $this->id_salle5[0]->id_salle)->where('id', '<>', $this->id_salle5[1]->id_salle)->where('id', '<>', $this->id_salle5[2]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour5)
                                ->where('cours.heure_debut', '=', $this->horaire5);
                            })->get();
                            $this->enseignants5 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle5)==4){
                            //enlever les salles occupées
                            $this->salles5 = DB::table('salles')->where('id', '<>', $this->id_salle5[0]->id_salle)->where('id', '<>', $this->id_salle5[1]->id_salle)->where('id', '<>', $this->id_salle5[2]->id_salle)->where('id', '<>', $this->id_salle5[3]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour5)
                                ->where('cours.heure_debut', '=', $this->horaire5);
                            })->get();
                            $this->enseignants5 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle5)==5){
                            //enlever les salles occupées
                            $this->salles5 = DB::table('salles')->where('id', '<>', $this->id_salle5[0]->id_salle)->where('id', '<>', $this->id_salle5[1]->id_salle)->where('id', '<>', $this->id_salle5[2]->id_salle)->where('id', '<>', $this->id_salle5[3]->id_salle)->where('id', '<>', $this->id_salle5[4]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour5)
                                ->where('cours.heure_debut', '=', $this->horaire5);
                            })->get();
                            $this->enseignants5 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle5)==6){
                            //enlever les salles occupées
                            $this->salles5 = DB::table('salles')->where('id', '<>', $this->id_salle5[0]->id_salle)->where('id', '<>', $this->id_salle5[1]->id_salle)->where('id', '<>', $this->id_salle5[2]->id_salle)->where('id', '<>', $this->id_salle5[3]->id_salle)->where('id', '<>', $this->id_salle5[4]->id_salle)->where('id', '<>', $this->id_salle5[5]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour5)
                                ->where('cours.heure_debut', '=', $this->horaire5);
                            })->get();
                            $this->enseignants5 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle5)==7){
                            //enlever les salles occupées
                            $this->salles5 = DB::table('salles')->where('id', '<>', $this->id_salle5[0]->id_salle)->where('id', '<>', $this->id_salle5[1]->id_salle)->where('id', '<>', $this->id_salle5[2]->id_salle)->where('id', '<>', $this->id_salle5[3]->id_salle)->where('id', '<>', $this->id_salle5[4]->id_salle)->where('id', '<>', $this->id_salle5[5]->id_salle)->where('id', '<>', $this->id_salle5[6]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour5)
                                ->where('cours.heure_debut', '=', $this->horaire5);
                            })->get();
                            $this->enseignants5 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle5)==8){
                            //enlever les salles occupées
                            $this->salles5 = DB::table('salles')->where('id', '<>', $this->id_salle5[0]->id_salle)->where('id', '<>', $this->id_salle5[1]->id_salle)->where('id', '<>', $this->id_salle5[2]->id_salle)->where('id', '<>', $this->id_salle5[3]->id_salle)->where('id', '<>', $this->id_salle5[4]->id_salle)->where('id', '<>', $this->id_salle5[5]->id_salle)->where('id', '<>', $this->id_salle5[6]->id_salle)->where('id', '<>', $this->id_salle5[7]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour5)
                                ->where('cours.heure_debut', '=', $this->horaire5);
                            })->get();
                            $this->enseignants5 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle5)==9){
                            //enlever les salles occupées
                            $this->salles5 = DB::table('salles')->where('id', '<>', $this->id_salle5[0]->id_salle)->where('id', '<>', $this->id_salle5[1]->id_salle)->where('id', '<>', $this->id_salle5[2]->id_salle)->where('id', '<>', $this->id_salle5[3]->id_salle)->where('id', '<>', $this->id_salle5[4]->id_salle)->where('id', '<>', $this->id_salle5[5]->id_salle)->where('id', '<>', $this->id_salle5[6]->id_salle)->where('id', '<>', $this->id_salle5[7]->id_salle)->where('id', '<>', $this->id_salle5[8]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour5)
                                ->where('cours.heure_debut', '=', $this->horaire5);
                            })->get();
                            $this->enseignants5 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle5)==10){
                            //enlever les salles occupées
                            $this->salles5 = DB::table('salles')->where('id', '<>', $this->id_salle5[0]->id_salle)->where('id', '<>', $this->id_salle5[1]->id_salle)->where('id', '<>', $this->id_salle5[2]->id_salle)->where('id', '<>', $this->id_salle5[3]->id_salle)->where('id', '<>', $this->id_salle5[4]->id_salle)->where('id', '<>', $this->id_salle5[5]->id_salle)->where('id', '<>', $this->id_salle5[6]->id_salle)->where('id', '<>', $this->id_salle5[7]->id_salle)->where('id', '<>', $this->id_salle5[8]->id_salle)->where('id', '<>', $this->id_salle5[9]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour5)
                                ->where('cours.heure_debut', '=', $this->horaire5);
                            })->get();
                            $this->enseignants5 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->where('id', '<>', $id_ens[9]->id_ens)->orderBy('nom_ens')->get();
                        }
                        
                }
                else{
                    $this->salles5 = DB::table('salles')->get();
                    $this->enseignants5 = DB::table('enseignants')->orderBy('nom_ens')->get();
                }
            }
        }

        //on travaille sur le 6e enregistrement
        if(!empty($this->jour5) and !empty($this->horaire5)){
            if(($this->jour6 == $this->jour4 and $this->horaire6 == $this->horaire4) or ($this->jour6 ==$this->jour3 and $this->horaire6 ==$this->horaire3) or ($this->jour6 ==$this->jour2 and $this->horaire6 ==$this->horaire2) or ($this->jour6 ==$this->jour1 and $this->horaire6 ==$this->horaire1) or ($this->jour6 ==$this->jour5 and $this->horaire6 ==$this->horaire5)){
                $this->salles6 = [];
                $this->enseignants6 = [];
            }
            else{
                $this->id_salle6 = DB::table('cours')->where('jour', $this->jour6)->where('heure_debut', $this->horaire6)->get();
                if(count($this->id_salle6)!=0){
                    //  dd($this->id_sall2);
                        if(count($this->id_salle6)==1){
                                //enlever les salles occupées
                                $this->salles6 = DB::table('salles')->where('id', '<>', $this->id_salle6[0]->id_salle)->where('id', '<>', $this->salle1)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour6)
                                    ->where('cours.heure_debut', '=', $this->horaire6);
                                })->get();
                                $this->enseignants6 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ense)->where('id', '<>', $this->enseignant1)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle6)==2){
                                //enlever les salles occupées
                                $this->salles6 = DB::table('salles')->where('id', '<>', $this->id_salle6[0]->id_salle)->where('id', '<>', $this->id_salle6[1]->id_salle)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour6)
                                    ->where('cours.heure_debut', '=', $this->horaire6);
                                })->get();
                                $this->enseignants6 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle6)==3){
                            //enlever les salles occupées
                            $this->salles6 = DB::table('salles')->where('id', '<>', $this->id_salle6[0]->id_salle)->where('id', '<>', $this->id_salle6[1]->id_salle)->where('id', '<>', $this->id_salle6[2]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour6)
                                ->where('cours.heure_debut', '=', $this->horaire6);
                            })->get();
                            $this->enseignants6 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle6)==4){
                            //enlever les salles occupées
                            $this->salles6 = DB::table('salles')->where('id', '<>', $this->id_salle6[0]->id_salle)->where('id', '<>', $this->id_salle6[1]->id_salle)->where('id', '<>', $this->id_salle6[2]->id_salle)->where('id', '<>', $this->id_salle6[3]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour6)
                                ->where('cours.heure_debut', '=', $this->horaire6);
                            })->get();
                            $this->enseignants6 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle6)==5){
                            //enlever les salles occupées
                            $this->salles6 = DB::table('salles')->where('id', '<>', $this->id_salle6[0]->id_salle)->where('id', '<>', $this->id_salle6[1]->id_salle)->where('id', '<>', $this->id_salle6[2]->id_salle)->where('id', '<>', $this->id_salle6[3]->id_salle)->where('id', '<>', $this->id_salle6[4]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour6)
                                ->where('cours.heure_debut', '=', $this->horaire6);
                            })->get();
                            $this->enseignants6 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle6)==6){
                            //enlever les salles occupées
                            $this->salles6 = DB::table('salles')->where('id', '<>', $this->id_salle6[0]->id_salle)->where('id', '<>', $this->id_salle6[1]->id_salle)->where('id', '<>', $this->id_salle6[2]->id_salle)->where('id', '<>', $this->id_salle6[3]->id_salle)->where('id', '<>', $this->id_salle6[4]->id_salle)->where('id', '<>', $this->id_salle6[5]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour6)
                                ->where('cours.heure_debut', '=', $this->horaire6);
                            })->get();
                            $this->enseignants6 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle6)==7){
                            //enlever les salles occupées
                            $this->salles6 = DB::table('salles')->where('id', '<>', $this->id_salle6[0]->id_salle)->where('id', '<>', $this->id_salle6[1]->id_salle)->where('id', '<>', $this->id_salle6[2]->id_salle)->where('id', '<>', $this->id_salle6[3]->id_salle)->where('id', '<>', $this->id_salle6[4]->id_salle)->where('id', '<>', $this->id_salle6[5]->id_salle)->where('id', '<>', $this->id_salle6[6]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour6)
                                ->where('cours.heure_debut', '=', $this->horaire6);
                            })->get();
                            $this->enseignants6 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle6)==8){
                            //enlever les salles occupées
                            $this->salles6 = DB::table('salles')->where('id', '<>', $this->id_salle6[0]->id_salle)->where('id', '<>', $this->id_salle6[1]->id_salle)->where('id', '<>', $this->id_salle6[2]->id_salle)->where('id', '<>', $this->id_salle6[3]->id_salle)->where('id', '<>', $this->id_salle6[4]->id_salle)->where('id', '<>', $this->id_salle6[5]->id_salle)->where('id', '<>', $this->id_salle6[6]->id_salle)->where('id', '<>', $this->id_salle6[7]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour6)
                                ->where('cours.heure_debut', '=', $this->horaire6);
                            })->get();
                            $this->enseignants6 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle6)==9){
                            //enlever les salles occupées
                            $this->salles6 = DB::table('salles')->where('id', '<>', $this->id_salle6[0]->id_salle)->where('id', '<>', $this->id_salle6[1]->id_salle)->where('id', '<>', $this->id_salle6[2]->id_salle)->where('id', '<>', $this->id_salle6[3]->id_salle)->where('id', '<>', $this->id_salle6[4]->id_salle)->where('id', '<>', $this->id_salle6[5]->id_salle)->where('id', '<>', $this->id_salle6[6]->id_salle)->where('id', '<>', $this->id_salle6[7]->id_salle)->where('id', '<>', $this->id_salle6[8]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour6)
                                ->where('cours.heure_debut', '=', $this->horaire6);
                            })->get();
                            $this->enseignants6 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle6)==10){
                            //enlever les salles occupées
                            $this->salles6 = DB::table('salles')->where('id', '<>', $this->id_salle6[0]->id_salle)->where('id', '<>', $this->id_salle6[1]->id_salle)->where('id', '<>', $this->id_salle6[2]->id_salle)->where('id', '<>', $this->id_salle6[3]->id_salle)->where('id', '<>', $this->id_salle6[4]->id_salle)->where('id', '<>', $this->id_salle6[5]->id_salle)->where('id', '<>', $this->id_salle6[6]->id_salle)->where('id', '<>', $this->id_salle6[7]->id_salle)->where('id', '<>', $this->id_salle6[8]->id_salle)->where('id', '<>', $this->id_salle6[9]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour6)
                                ->where('cours.heure_debut', '=', $this->horaire6);
                            })->get();
                            $this->enseignants6 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->where('id', '<>', $id_ens[9]->id_ens)->orderBy('nom_ens')->get();
                        }
                        
                }
                else{
                    $this->salles6 = DB::table('salles')->get();
                    $this->enseignants6 = DB::table('enseignants')->orderBy('nom_ens')->get();
                }
            }
        }

        //on travaille sur le 7e enregistrement

        if(!empty($this->jour6) and !empty($this->horaire6)){
            // dd($this->jour7);
            if(($this->jour7 == $this->jour4 and $this->horaire7 == $this->horaire4) or ($this->jour7 ==$this->jour3 and $this->horaire7 ==$this->horaire3) or ($this->jour7 ==$this->jour2 and $this->horaire7 ==$this->horaire2) or ($this->jour7 ==$this->jour1 and $this->horaire7 ==$this->horaire1) or ($this->jour7 ==$this->jour5 and $this->horaire7 ==$this->horaire5) or ($this->jour7 == $this->jour6 and $this->horaire7 == $this->horaire6)){
                $this->salles7 = [];
                $this->enseignants7 = [];
            }
            else{
                $this->id_salle7 = DB::table('cours')->where('jour', $this->jour7)->where('heure_debut', $this->horaire7)->get();
                if(count($this->id_salle7)!=0){
                    //  dd($this->id_sall2);
                        if(count($this->id_salle7)==1){
                                //enlever les salles occupées
                                $this->salles7 = DB::table('salles')->where('id', '<>', $this->id_salle7[0]->id_salle)->where('id', '<>', $this->salle1)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour7)
                                    ->where('cours.heure_debut', '=', $this->horaire7);
                                })->get();
                                $this->enseignants7 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ense)->where('id', '<>', $this->enseignant1)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle7)==2){
                                //enlever les salles occupées
                                $this->salles7 = DB::table('salles')->where('id', '<>', $this->id_salle7[0]->id_salle)->where('id', '<>', $this->id_salle7[1]->id_salle)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour7)
                                    ->where('cours.heure_debut', '=', $this->horaire7);
                                })->get();
                                $this->enseignants7 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle7)==3){
                            //enlever les salles occupées
                            $this->salles7 = DB::table('salles')->where('id', '<>', $this->id_salle7[0]->id_salle)->where('id', '<>', $this->id_salle7[1]->id_salle)->where('id', '<>', $this->id_salle7[2]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour7)
                                ->where('cours.heure_debut', '=', $this->horaire7);
                            })->get();
                            $this->enseignants7 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle7)==4){
                            //enlever les salles occupées
                            $this->salles7 = DB::table('salles')->where('id', '<>', $this->id_salle7[0]->id_salle)->where('id', '<>', $this->id_salle7[1]->id_salle)->where('id', '<>', $this->id_salle7[2]->id_salle)->where('id', '<>', $this->id_salle7[3]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour7)
                                ->where('cours.heure_debut', '=', $this->horaire7);
                            })->get();
                            $this->enseignants7 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle7)==5){
                            //enlever les salles occupées
                            $this->salles7 = DB::table('salles')->where('id', '<>', $this->id_salle7[0]->id_salle)->where('id', '<>', $this->id_salle7[1]->id_salle)->where('id', '<>', $this->id_salle7[2]->id_salle)->where('id', '<>', $this->id_salle7[3]->id_salle)->where('id', '<>', $this->id_salle7[4]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour7)
                                ->where('cours.heure_debut', '=', $this->horaire7);
                            })->get();
                            $this->enseignants7 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle7)==6){
                            //enlever les salles occupées
                            $this->salles7 = DB::table('salles')->where('id', '<>', $this->id_salle7[0]->id_salle)->where('id', '<>', $this->id_salle7[1]->id_salle)->where('id', '<>', $this->id_salle7[2]->id_salle)->where('id', '<>', $this->id_salle7[3]->id_salle)->where('id', '<>', $this->id_salle7[4]->id_salle)->where('id', '<>', $this->id_salle7[5]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour7)
                                ->where('cours.heure_debut', '=', $this->horaire7);
                            })->get();
                            $this->enseignants7 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle7)==7){
                            //enlever les salles occupées
                            $this->salles7 = DB::table('salles')->where('id', '<>', $this->id_salle7[0]->id_salle)->where('id', '<>', $this->id_salle7[1]->id_salle)->where('id', '<>', $this->id_salle7[2]->id_salle)->where('id', '<>', $this->id_salle7[3]->id_salle)->where('id', '<>', $this->id_salle7[4]->id_salle)->where('id', '<>', $this->id_salle7[5]->id_salle)->where('id', '<>', $this->id_salle7[6]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour7)
                                ->where('cours.heure_debut', '=', $this->horaire7);
                            })->get();
                            $this->enseignants7 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle7)==8){
                            //enlever les salles occupées
                            $this->salles7 = DB::table('salles')->where('id', '<>', $this->id_salle7[0]->id_salle)->where('id', '<>', $this->id_salle7[1]->id_salle)->where('id', '<>', $this->id_salle7[2]->id_salle)->where('id', '<>', $this->id_salle7[3]->id_salle)->where('id', '<>', $this->id_salle7[4]->id_salle)->where('id', '<>', $this->id_salle7[5]->id_salle)->where('id', '<>', $this->id_salle7[6]->id_salle)->where('id', '<>', $this->id_salle7[7]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour7)
                                ->where('cours.heure_debut', '=', $this->horaire7);
                            })->get();
                            $this->enseignants7 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle7)==9){
                            //enlever les salles occupées
                            $this->salles7 = DB::table('salles')->where('id', '<>', $this->id_salle7[0]->id_salle)->where('id', '<>', $this->id_salle7[1]->id_salle)->where('id', '<>', $this->id_salle7[2]->id_salle)->where('id', '<>', $this->id_salle7[3]->id_salle)->where('id', '<>', $this->id_salle7[4]->id_salle)->where('id', '<>', $this->id_salle7[5]->id_salle)->where('id', '<>', $this->id_salle7[6]->id_salle)->where('id', '<>', $this->id_salle7[7]->id_salle)->where('id', '<>', $this->id_salle7[8]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour7)
                                ->where('cours.heure_debut', '=', $this->horaire7);
                            })->get();
                            $this->enseignants7 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle7)==10){
                            //enlever les salles occupées
                            $this->salles7 = DB::table('salles')->where('id', '<>', $this->id_salle7[0]->id_salle)->where('id', '<>', $this->id_salle7[1]->id_salle)->where('id', '<>', $this->id_salle7[2]->id_salle)->where('id', '<>', $this->id_salle7[3]->id_salle)->where('id', '<>', $this->id_salle7[4]->id_salle)->where('id', '<>', $this->id_salle7[5]->id_salle)->where('id', '<>', $this->id_salle7[6]->id_salle)->where('id', '<>', $this->id_salle7[7]->id_salle)->where('id', '<>', $this->id_salle7[8]->id_salle)->where('id', '<>', $this->id_salle7[9]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour7)
                                ->where('cours.heure_debut', '=', $this->horaire7);
                            })->get();
                            $this->enseignants7 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->where('id', '<>', $id_ens[9]->id_ens)->orderBy('nom_ens')->get();
                        }
                        
                }
                else{
                    $this->salles7 = DB::table('salles')->get();
                    $this->enseignants7 = DB::table('enseignants')->orderBy('nom_ens')->get();
                }
            }
        }


        //on travaille sur le 8e enregistrement
        if(!empty($this->jour7) and !empty($this->horaire7)){
            if(($this->jour8 == $this->jour4 and $this->horaire8 == $this->horaire4) or ($this->jour8 ==$this->jour3 and $this->horaire8 ==$this->horaire3) or ($this->jour8 ==$this->jour2 and $this->horaire8 ==$this->horaire2) or ($this->jour8 ==$this->jour1 and $this->horaire8 ==$this->horaire1) or ($this->jour8 ==$this->jour5 and $this->horaire8 ==$this->horaire5) or ($this->jour8 == $this->jour6 and $this->horaire8 == $this->horaire6) or ($this->jour8 == $this->jour7 and $this->horaire8 == $this->horaire7)){
                $this->salles8 = [];
                $this->enseignants8 = [];
            }
            else{
                $this->id_salle8 = DB::table('cours')->where('jour', $this->jour8)->where('heure_debut', $this->horaire8)->get();
                if(count($this->id_salle8)!=0){
                    //  dd($this->id_sall2);
                        if(count($this->id_salle8)==1){
                                //enlever les salles occupées
                                $this->salles8 = DB::table('salles')->where('id', '<>', $this->id_salle8[0]->id_salle)->where('id', '<>', $this->salle1)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour8)
                                    ->where('cours.heure_debut', '=', $this->horaire8);
                                })->get();
                                $this->enseignants8 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ense)->where('id', '<>', $this->enseignant1)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle8)==2){
                                //enlever les salles occupées
                                $this->salles8 = DB::table('salles')->where('id', '<>', $this->id_salle8[0]->id_salle)->where('id', '<>', $this->id_salle8[1]->id_salle)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour8)
                                    ->where('cours.heure_debut', '=', $this->horaire8);
                                })->get();
                                $this->enseignants8 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle8)==3){
                            //enlever les salles occupées
                            $this->salles8 = DB::table('salles')->where('id', '<>', $this->id_salle8[0]->id_salle)->where('id', '<>', $this->id_salle8[1]->id_salle)->where('id', '<>', $this->id_salle8[2]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour8)
                                ->where('cours.heure_debut', '=', $this->horaire8);
                            })->get();
                            $this->enseignants8 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle8)==4){
                            //enlever les salles occupées
                            $this->salles8 = DB::table('salles')->where('id', '<>', $this->id_salle8[0]->id_salle)->where('id', '<>', $this->id_salle8[1]->id_salle)->where('id', '<>', $this->id_salle8[2]->id_salle)->where('id', '<>', $this->id_salle8[3]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour8)
                                ->where('cours.heure_debut', '=', $this->horaire8);
                            })->get();
                            $this->enseignants8 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle8)==5){
                            //enlever les salles occupées
                            $this->salles8 = DB::table('salles')->where('id', '<>', $this->id_salle8[0]->id_salle)->where('id', '<>', $this->id_salle8[1]->id_salle)->where('id', '<>', $this->id_salle8[2]->id_salle)->where('id', '<>', $this->id_salle8[3]->id_salle)->where('id', '<>', $this->id_salle8[4]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour8)
                                ->where('cours.heure_debut', '=', $this->horaire8);
                            })->get();
                            $this->enseignants8 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle8)==6){
                            //enlever les salles occupées
                            $this->salles8 = DB::table('salles')->where('id', '<>', $this->id_salle8[0]->id_salle)->where('id', '<>', $this->id_salle8[1]->id_salle)->where('id', '<>', $this->id_salle8[2]->id_salle)->where('id', '<>', $this->id_salle8[3]->id_salle)->where('id', '<>', $this->id_salle8[4]->id_salle)->where('id', '<>', $this->id_salle8[5]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour8)
                                ->where('cours.heure_debut', '=', $this->horaire8);
                            })->get();
                            $this->enseignants8 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle8)==7){
                            //enlever les salles occupées
                            $this->salles8 = DB::table('salles')->where('id', '<>', $this->id_salle8[0]->id_salle)->where('id', '<>', $this->id_salle8[1]->id_salle)->where('id', '<>', $this->id_salle8[2]->id_salle)->where('id', '<>', $this->id_salle8[3]->id_salle)->where('id', '<>', $this->id_salle8[4]->id_salle)->where('id', '<>', $this->id_salle8[5]->id_salle)->where('id', '<>', $this->id_salle8[6]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour8)
                                ->where('cours.heure_debut', '=', $this->horaire8);
                            })->get();
                            $this->enseignants8 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle8)==8){
                            //enlever les salles occupées
                            $this->salles8 = DB::table('salles')->where('id', '<>', $this->id_salle8[0]->id_salle)->where('id', '<>', $this->id_salle8[1]->id_salle)->where('id', '<>', $this->id_salle8[2]->id_salle)->where('id', '<>', $this->id_salle8[3]->id_salle)->where('id', '<>', $this->id_salle8[4]->id_salle)->where('id', '<>', $this->id_salle8[5]->id_salle)->where('id', '<>', $this->id_salle8[6]->id_salle)->where('id', '<>', $this->id_salle8[7]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour8)
                                ->where('cours.heure_debut', '=', $this->horaire8);
                            })->get();
                            $this->enseignants8 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle8)==9){
                            //enlever les salles occupées
                            $this->salles8 = DB::table('salles')->where('id', '<>', $this->id_salle8[0]->id_salle)->where('id', '<>', $this->id_salle8[1]->id_salle)->where('id', '<>', $this->id_salle8[2]->id_salle)->where('id', '<>', $this->id_salle8[3]->id_salle)->where('id', '<>', $this->id_salle8[4]->id_salle)->where('id', '<>', $this->id_salle8[5]->id_salle)->where('id', '<>', $this->id_salle8[6]->id_salle)->where('id', '<>', $this->id_salle8[7]->id_salle)->where('id', '<>', $this->id_salle8[8]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour8)
                                ->where('cours.heure_debut', '=', $this->horaire8);
                            })->get();
                            $this->enseignants8 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle8)==10){
                            //enlever les salles occupées
                            $this->salles8 = DB::table('salles')->where('id', '<>', $this->id_salle8[0]->id_salle)->where('id', '<>', $this->id_salle8[1]->id_salle)->where('id', '<>', $this->id_salle8[2]->id_salle)->where('id', '<>', $this->id_salle8[3]->id_salle)->where('id', '<>', $this->id_salle8[4]->id_salle)->where('id', '<>', $this->id_salle8[5]->id_salle)->where('id', '<>', $this->id_salle8[6]->id_salle)->where('id', '<>', $this->id_salle8[7]->id_salle)->where('id', '<>', $this->id_salle8[8]->id_salle)->where('id', '<>', $this->id_salle8[9]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour8)
                                ->where('cours.heure_debut', '=', $this->horaire8);
                            })->get();
                            $this->enseignants8 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->where('id', '<>', $id_ens[9]->id_ens)->orderBy('nom_ens')->get();
                        }
                        
                }
                else{
                    $this->salles8 = DB::table('salles')->get();
                    $this->enseignants8 = DB::table('enseignants')->orderBy('nom_ens')->get();
                }
            }
        }

        //on traville sur le 9e enregistrement
        if(!empty($this->jour8) and !empty($this->horaire8)){
            if(($this->jour9 == $this->jour4 and $this->horaire9 == $this->horaire4) or ($this->jour9 ==$this->jour3 and $this->horaire9 ==$this->horaire3) or ($this->jour9 ==$this->jour2 and $this->horaire9 ==$this->horaire2) or ($this->jour9 ==$this->jour1 and $this->horaire9 ==$this->horaire1) or ($this->jour9 ==$this->jour5 and $this->horaire9 ==$this->horaire5) or ($this->jour9 == $this->jour6 and $this->horaire9 == $this->horaire6) or ($this->jour9 == $this->jour7 and $this->horaire9 == $this->horaire7) or ($this->jour9 == $this->jour8 and $this->horaire9 == $this->horaire8)){
                $this->salles9 = [];
                $this->enseignants9 = [];
            }
            else{
                $this->id_salle9 = DB::table('cours')->where('jour', $this->jour9)->where('heure_debut', $this->horaire9)->get();
                if(count($this->id_salle9)!=0){
                    //  dd($this->id_sall2);
                        if(count($this->id_salle9)==1){
                                //enlever les salles occupées
                                $this->salles9 = DB::table('salles')->where('id', '<>', $this->id_salle9[0]->id_salle)->where('id', '<>', $this->salle1)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour9)
                                    ->where('cours.heure_debut', '=', $this->horaire9);
                                })->get();
                                $this->enseignants9 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ense)->where('id', '<>', $this->enseignant1)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle9)==2){
                                //enlever les salles occupées
                                $this->salles9 = DB::table('salles')->where('id', '<>', $this->id_salle9[0]->id_salle)->where('id', '<>', $this->id_salle9[1]->id_salle)->get();    
                                //enlever l'enseignant occupé de la liste des enseignants à afficher
                                $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                    $join->on('enseignements.id', '=', 'cours.id_ense')
                                    ->where('cours.jour' , '=', $this->jour9)
                                    ->where('cours.heure_debut', '=', $this->horaire9);
                                })->get();
                                $this->enseignants9 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle9)==3){
                            //enlever les salles occupées
                            $this->salles9 = DB::table('salles')->where('id', '<>', $this->id_salle9[0]->id_salle)->where('id', '<>', $this->id_salle9[1]->id_salle)->where('id', '<>', $this->id_salle9[2]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour9)
                                ->where('cours.heure_debut', '=', $this->horaire9);
                            })->get();
                            $this->enseignants9 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle9)==4){
                            //enlever les salles occupées
                            $this->salles9 = DB::table('salles')->where('id', '<>', $this->id_salle9[0]->id_salle)->where('id', '<>', $this->id_salle9[1]->id_salle)->where('id', '<>', $this->id_salle9[2]->id_salle)->where('id', '<>', $this->id_salle9[3]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour9)
                                ->where('cours.heure_debut', '=', $this->horaire9);
                            })->get();
                            $this->enseignants9 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle9)==5){
                            //enlever les salles occupées
                            $this->salles9 = DB::table('salles')->where('id', '<>', $this->id_salle9[0]->id_salle)->where('id', '<>', $this->id_salle9[1]->id_salle)->where('id', '<>', $this->id_salle9[2]->id_salle)->where('id', '<>', $this->id_salle9[3]->id_salle)->where('id', '<>', $this->id_salle9[4]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour9)
                                ->where('cours.heure_debut', '=', $this->horaire9);
                            })->get();
                            $this->enseignants9 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle9)==6){
                            //enlever les salles occupées
                            $this->salles9 = DB::table('salles')->where('id', '<>', $this->id_salle9[0]->id_salle)->where('id', '<>', $this->id_salle9[1]->id_salle)->where('id', '<>', $this->id_salle9[2]->id_salle)->where('id', '<>', $this->id_salle9[3]->id_salle)->where('id', '<>', $this->id_salle9[4]->id_salle)->where('id', '<>', $this->id_salle9[5]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour9)
                                ->where('cours.heure_debut', '=', $this->horaire9);
                            })->get();
                            $this->enseignants9 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle9)==7){
                            //enlever les salles occupées
                            $this->salles9 = DB::table('salles')->where('id', '<>', $this->id_salle9[0]->id_salle)->where('id', '<>', $this->id_salle9[1]->id_salle)->where('id', '<>', $this->id_salle9[2]->id_salle)->where('id', '<>', $this->id_salle9[3]->id_salle)->where('id', '<>', $this->id_salle9[4]->id_salle)->where('id', '<>', $this->id_salle9[5]->id_salle)->where('id', '<>', $this->id_salle9[6]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour9)
                                ->where('cours.heure_debut', '=', $this->horaire9);
                            })->get();
                            $this->enseignants9 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle9)==8){
                            //enlever les salles occupées
                            $this->salles9 = DB::table('salles')->where('id', '<>', $this->id_salle9[0]->id_salle)->where('id', '<>', $this->id_salle9[1]->id_salle)->where('id', '<>', $this->id_salle9[2]->id_salle)->where('id', '<>', $this->id_salle9[3]->id_salle)->where('id', '<>', $this->id_salle9[4]->id_salle)->where('id', '<>', $this->id_salle9[5]->id_salle)->where('id', '<>', $this->id_salle9[6]->id_salle)->where('id', '<>', $this->id_salle9[7]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour9)
                                ->where('cours.heure_debut', '=', $this->horaire9);
                            })->get();
                            $this->enseignants9 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle9)==9){
                            //enlever les salles occupées
                            $this->salles9 = DB::table('salles')->where('id', '<>', $this->id_salle9[0]->id_salle)->where('id', '<>', $this->id_salle9[1]->id_salle)->where('id', '<>', $this->id_salle9[2]->id_salle)->where('id', '<>', $this->id_salle9[3]->id_salle)->where('id', '<>', $this->id_salle9[4]->id_salle)->where('id', '<>', $this->id_salle9[5]->id_salle)->where('id', '<>', $this->id_salle9[6]->id_salle)->where('id', '<>', $this->id_salle9[7]->id_salle)->where('id', '<>', $this->id_salle9[8]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour9)
                                ->where('cours.heure_debut', '=', $this->horaire9);
                            })->get();
                            $this->enseignants9 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->orderBy('nom_ens')->get();
                        }
                        if(count($this->id_salle9)==10){
                            //enlever les salles occupées
                            $this->salles9 = DB::table('salles')->where('id', '<>', $this->id_salle9[0]->id_salle)->where('id', '<>', $this->id_salle9[1]->id_salle)->where('id', '<>', $this->id_salle9[2]->id_salle)->where('id', '<>', $this->id_salle9[3]->id_salle)->where('id', '<>', $this->id_salle9[4]->id_salle)->where('id', '<>', $this->id_salle9[5]->id_salle)->where('id', '<>', $this->id_salle9[6]->id_salle)->where('id', '<>', $this->id_salle9[7]->id_salle)->where('id', '<>', $this->id_salle9[8]->id_salle)->where('id', '<>', $this->id_salle9[9]->id_salle)->get();    
                            //enlever l'enseignant occupé de la liste des enseignants à afficher
                            $id_ens = DB::table(('enseignements'))->join('cours', function($join){
                                $join->on('enseignements.id', '=', 'cours.id_ense')
                                ->where('cours.jour' , '=', $this->jour9)
                                ->where('cours.heure_debut', '=', $this->horaire9);
                            })->get();
                            $this->enseignants9 = DB::table('enseignants')->where('id', '<>', $id_ens[0]->id_ens)->where('id', '<>', $id_ens[1]->id_ens)->where('id', '<>', $id_ens[2]->id_ens)->where('id', '<>', $id_ens[3]->id_ens)->where('id', '<>', $id_ens[4]->id_ens)->where('id', '<>', $id_ens[5]->id_ens)->where('id', '<>', $id_ens[6]->id_ens)->where('id', '<>', $id_ens[7]->id_ens)->where('id', '<>', $id_ens[8]->id_ens)->where('id', '<>', $id_ens[9]->id_ens)->orderBy('nom_ens')->get();
                        }
                        
                }
                else{
                    $this->salles9 = DB::table('salles')->get();
                    $this->enseignants9 = DB::table('enseignants')->orderBy('nom_ens')->get();
                }
            }
        }

        $this->mesues = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->get();
        if(!empty($this->mesues2)){
            $this->mesues2 = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->where('id', '<>', $this->matiere1)->get();

        }
        if(!empty($this->mesues3)){
            $this->mesues3 = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        }
        if(!empty($this->mesues4)){
            $this->mesues4 = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->where('id', '<>', $this->matiere3)->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        }
        if(!empty($this->mesues5)){
            $this->mesues5 = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->where('id', '<>', $this->matiere4)->where('id', '<>', $this->matiere3)->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        }
        if(!empty($this->mesues6)){
            $this->mesues6 = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->where('id', '<>', $this->matiere5)->where('id', '<>', $this->matiere4)->where('id', '<>', $this->matiere3)->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        }
        if(!empty($this->mesues7)){
            $this->mesues7 = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->where('id', '<>', $this->matiere6)->where('id', '<>', $this->matiere5)->where('id', '<>', $this->matiere4)->where('id', '<>', $this->matiere3)->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        }
        if(!empty($this->mesues8)){
            $this->mesues8 = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->where('id', '<>', $this->matiere7)->where('id', '<>', $this->matiere6)->where('id', '<>', $this->matiere5)->where('id', '<>', $this->matiere4)->where('id', '<>', $this->matiere3)->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        }
        if(!empty($this->mesues9)){
            $this->mesues9 = DB::table('ues')->where('id_niveau', $this->eff[0]->id)->where('id', '<>', $this->matiere8)->where('id', '<>', $this->matiere7)->where('id', '<>', $this->matiere6)->where('id', '<>', $this->matiere5)->where('id', '<>', $this->matiere4)->where('id', '<>', $this->matiere3)->where('id', '<>', $this->matiere2)->where('id', '<>', $this->matiere1)->get();
        }
        return view('livewire.planifier-cours')->layout('layouts.app2');
    }
}
