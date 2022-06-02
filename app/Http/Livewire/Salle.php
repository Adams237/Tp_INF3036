<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Salle extends Component
{
    public $nom_salle;
    public $id_salle;
    public $cours;
    public $i;
    public $test;
    public $enseignant;
    public $ue;
    public $test2;
    //lundi
    public $ensL7;
    public $ueL7;
    public $fL7;
    public $ensL10;
    public $ueL10;
    public $fL10;
    public $ensL13;
    public $ueL13;
    public $fL13;
    public $ensL16;
    public $ueL16;
    public $fL16;
    public $ensL19;
    public $ueL19;
    public $fL19;
    //mardi
    public $ensMA7;
    public $ueMA7;
    public $fMA7;
    public $ensMA10;
    public $ueMA10;
    public $fMA10;
    public $ensMA13;
    public $ueMA13;
    public $fMA13;
    public $ensMA16;
    public $ueMA16;
    public $fMA16;
    public $ensMA19;
    public $ueMA19;
    public $fMA19;
    //MERCREDI
    public $ensM7;
    public $ueM7;
    public $fM7;
    public $ensM10;
    public $ueM10;
    public $fM10;
    public $ensM13;
    public $ueM13;
    public $fM13;
    public $ensM16;
    public $ueM16;
    public $fM16;
    public $ensM19;
    public $ueM19;
    public $fM19;
    //jeudi
    public $ensJ7;
    public $ueJ7;
    public $fJ7;
    public $ensJ10;
    public $ueJ10;
    public $fJ10;
    public $ensJ13;
    public $ueJ13;
    public $fJ13;
    public $ensJ16;
    public $ueJ16;
    public $fJ16;
    public $ensJ19;
    public $ueJ19;
    public $fJ19;
    //VENDREDI
    public $ensV7;
    public $ueV7;
    public $fV7;
    public $ensV10;
    public $ueV10;
    public $fV10;
    public $ensV13;
    public $ueV13;
    public $fV13;
    public $ensV16;
    public $ueV16;
    public $fV16;
    public $ensV19;
    public $ueV19;
    public $fV19;
    //SAMEDI
    public $ensS7;
    public $ueS7;
    public $fS7;
    public $ensS10;
    public $ueS10;
    public $fS10;
    public $ensS13;
    public $ueS13;
    public $fS13;
    public $ensS16;
    public $ueS16;
    public $fS16;
    public $ensS19;
    public $ueS19;
    public $fS19;
    //DIMANCHE
    public $ensD7;
    public $ueD7;
    public $fD7;
    public $ensD10;
    public $ueD10;
    public $fD10;
    public $ensD13;
    public $ueD13;
    public $fD13;
    public $ensD16;
    public $ueD16;
    public $fD16;
    public $ensD19;
    public $ueD19;
    public $fD19;

    //public $salles = ['bonjour', 'add', 'com', 'pau', 'al'];
    public function mount(Request $request){
        $this->nom_salle  =$request->nom_salle;
        $this->id_salle = $request->id_salle;
        $this->cours = DB::table('cours')->where('id_salle', $this->id_salle)->get();
        // dd($cours);
        if(count($this->cours)!=0){
            // for($this->i=0; $this->i<count($this->cours); $this->i++){
            //     $ue[$this->i] = DB::table('enseignement_ue')->join('enseignements', function($join){
            //         $join->on('enseignement_ue.id_ense', '=','enseignements.id')
            //         ->where('enseignements.id', $this->cours[$this->i]->id_ense);
            //     })->get();
            // }
                for($this->i=0; $this->i<count($this->cours); $this->i++){
                    
                    if($this->cours[$this->i]->jour =='mercredi'){
                        // dd('con2');
                        
                        if($this->cours[$this->i]->heure_debut == '7H'){
                            $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                                $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                                ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                            })->get();
                            $this->enseignant = DB::table('enseignants')->where('id',$this->test[0]->id_ens)->value('nom_ens');
                            $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                            $this->test2 = DB::table('filieres')->join('niveaux', function($join){
                                $join->on('filieres.id','=','niveaux.id_filiere')
                                ->where('niveaux.id',$this->ue[0]->id_niveau);
                            })->value('nom_filiere');
                            // $this->test = DB::table('enseignement_ue')->where('id_ense',$this->cours[$this->i]->id_ense)->get();
                        }
                    }
                }

        }
        // dd($this->test2);
        
    }
    public function render()
    {
        if(count($this->cours)!=0){
            for($this->i=0; $this->i<count($this->cours); $this->i++){
                if($this->cours[$this->i]->jour == 'lundi'){
                    if($this->cours[$this->i]->heure_debut == '7H'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensL7 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueL7 = $this->ue[0]->code_ue;
                        $this->fL7 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '10H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensL10 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueL10 = $this->ue[0]->code_ue;
                        $this->fL10 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '13H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensL13 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueL13 = $this->ue[0]->code_ue;
                        $this->fL13 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '16H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensL16 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueL16 = $this->ue[0]->code_ue;
                        $this->fL16 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '19H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensL19 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueL19 = $this->ue[0]->code_ue;
                        $this->fL19 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                }
                if($this->cours[$this->i]->jour == 'mardi'){
                    if($this->cours[$this->i]->heure_debut == '7H'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensMA7 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueMA7 = $this->ue[0]->code_ue;
                        $this->fMA7 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '10H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensMA10 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueMA10 = $this->ue[0]->code_ue;
                        $this->fMA10 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '13H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensMA13 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueMA13 = $this->ue[0]->code_ue;
                        $this->fMA13 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '16H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensMA16 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueMA16 = $this->ue[0]->code_ue;
                        $this->fMA16 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '19H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensMA19 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueMA19 = $this->ue[0]->code_ue;
                        $this->fMA19 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                } 
                if($this->cours[$this->i]->jour == 'mercredi'){
                    if($this->cours[$this->i]->heure_debut == '7H'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensM7 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueM7 = $this->ue[0]->code_ue;
                        $this->fM7 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '10H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensM10 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueM10 = $this->ue[0]->code_ue;
                        $this->fM10 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '13H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensM13 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueM13 = $this->ue[0]->code_ue;
                        $this->fM13 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '16H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensM16 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueM16 = $this->ue[0]->code_ue;
                        $this->fM16 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '19H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensM19 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueM19 = $this->ue[0]->code_ue;
                        $this->fM19 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                } 
                if($this->cours[$this->i]->jour == 'jeudi'){
                    if($this->cours[$this->i]->heure_debut == '7H'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensJ7 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueJ7 = $this->ue[0]->code_ue;
                        $this->fJ7 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '10H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensJ10 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueJ10 = $this->ue[0]->code_ue;
                        $this->fJ10 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '13H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensJ13 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueJ13 = $this->ue[0]->code_ue;
                        $this->fJ13 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '16H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensJ16 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueJ16 = $this->ue[0]->code_ue;
                        $this->fJ16 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '19H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensJ19 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueJ19 = $this->ue[0]->code_ue;
                        $this->fJ19 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                }
                if($this->cours[$this->i]->jour == 'vendredi'){
                    if($this->cours[$this->i]->heure_debut == '7H'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensV7 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueV7 = $this->ue[0]->code_ue;
                        $this->fV7 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '10H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensV10 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueV10 = $this->ue[0]->code_ue;
                        $this->fV10 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '13H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensV13 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueV13 = $this->ue[0]->code_ue;
                        $this->fV13 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '16H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensV16 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueV16 = $this->ue[0]->code_ue;
                        $this->fV16 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '19H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensV19 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueV19 = $this->ue[0]->code_ue;
                        $this->fV19 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                }
                if($this->cours[$this->i]->jour == 'samedi'){
                    if($this->cours[$this->i]->heure_debut == '7H'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensS7 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueS7 = $this->ue[0]->code_ue;
                        $this->fS7 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '10H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensS10 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueS10 = $this->ue[0]->code_ue;
                        $this->fS10 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '13H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensS13 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueS13 = $this->ue[0]->code_ue;
                        $this->fS13 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '16H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensS16 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueS16 = $this->ue[0]->code_ue;
                        $this->fS16 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '19H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensS19 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueS19 = $this->ue[0]->code_ue;
                        $this->fS19 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                } 
                if($this->cours[$this->i]->jour == 'dimanche'){
                    if($this->cours[$this->i]->heure_debut == '7H'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensD7 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueD7 = $this->ue[0]->code_ue;
                        $this->fD7 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '10H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensD10 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueD10 = $this->ue[0]->code_ue;
                        $this->fD10 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '13H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensD13 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueD13 = $this->ue[0]->code_ue;
                        $this->fD13 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '16H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensD16 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueD16 = $this->ue[0]->code_ue;
                        $this->fD16 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                    if($this->cours[$this->i]->heure_debut == '19H05'){
                        $this->test = DB::table('enseignement_ue')->join('enseignements', function($join){
                            $join->on('enseignement_ue.id_ense', '=','enseignements.id')
                            ->where('enseignements.id', $this->cours[$this->i]->id_ense);
                        })->get();
                        $this->ensD19 = DB::table('enseignants')->where('id', $this->test[0]->id_ens)->value('nom_ens');
                        $this->ue = DB::table('ues')->where('id', $this->test[0]->id_ue)->get();
                        $this->ueD19 = $this->ue[0]->code_ue;
                        $this->fD19 = DB::table('filieres')->join('niveaux', function($join){
                            $join->on('filieres.id','=','niveaux.id_filiere')
                            ->where('niveaux.id',$this->ue[0]->id_niveau);
                        })->value('nom_filiere');
                    }
                }    
            }
        }
        
        return view('livewire.salle')->layout('layouts.app2');
    }
}
