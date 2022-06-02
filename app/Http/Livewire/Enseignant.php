<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Enseignant extends Component
{
    public $enseignant;
    public $id_ens;
    public $id_ense;
    public $liste=[];
    public $i;
    // variable de lundi
    public $LUE7;
    public $LN7;
    public $LF7;
    public $LUE10;
    public $LN10;
    public $LF10;
    public $LUE13;
    public $LN13;
    public $LF13;
    public $LUE16;
    public $LN16;
    public $LF16;
    public $LUE19;
    public $LN19;
    public $LF19;
    //mardi
    public $MAUE7;
    public $MAN7;
    public $MAF7;
    public $MAUE10;
    public $MAN10;
    public $MAF10;
    public $MAUE13;
    public $MAN13;
    public $MAF13;
    public $MAUE16;
    public $MAN16;
    public $MAF16;
    public $MAUE19;
    public $MAN19;
    public $MAF19;
    //MECREDI
    public $MUE7;
    public $MN7;
    public $MF7;
    public $MUE10;
    public $MN10;
    public $MF10;
    public $MUE13;
    public $MN13;
    public $MF13;
    public $MUE16;
    public $MN16;
    public $MF16;
    public $MUE19;
    public $MN19;
    public $MF19;
    //JEUDI
    public $JUE7;
    public $JN7;
    public $JF7;
    public $JUE10;
    public $JN10;
    public $JF10;
    public $JUE13;
    public $JN13;
    public $JF13;
    public $JUE16;
    public $JN16;
    public $JF16;
    public $JUE19;
    public $JN19;
    public $JF19;

    //VENDREDI
    public $VUE7;
    public $VN7;
    public $VF7;
    public $VUE10;
    public $VN10;
    public $VF10;
    public $VUE13;
    public $VN13;
    public $VF13;
    public $VUE16;
    public $VN16;
    public $VF16;
    public $VUE19;
    public $VN19;
    public $VF19;
    //SAMEDI
    public $SUE7;
    public $SN7;
    public $SF7;
    public $SUE10;
    public $SN10;
    public $SF10;
    public $SUE13;
    public $SN13;
    public $SF13;
    public $SUE16;
    public $SN16;
    public $SF16;
    public $SUE19;
    public $SN19;
    public $SF19;
    //DIMANCHE
    public $DUE7;
    public $DN7;
    public $DF7;
    public $DUE10;
    public $DN10;
    public $DF10;
    public $DUE13;
    public $DN13;
    public $DF13;
    public $DUE16;
    public $DN16;
    public $DF16;
    public $DUE19;
    public $DN19;
    public $DF19;
    //public $enseignant = ['bonjour', 'add', 'com', 'pau', 'al'];

    public function mount(Request $request){
        $this->enseignant = $request->nom_ens;
        $this->id_ens = $request->id_ens;
        $this->id_ense = DB::table('enseignements')->where('id_ens',$this->id_ens)->get();
        // dd($this->id_ense);
        for($this->i=0; $this->i<count($this->id_ense); $this->i++ ){
            $this->liste[$this->i] = DB::table('cours')->join('enseignement_ue', function($join){
                $join->on('cours.id_ense', '=', 'enseignement_ue.id_ense')
                ->where('enseignement_ue.id_ense', $this->id_ense[$this->i]->id);
            })->get();
        }
        
    }
    
    public function render()
    {
        
        if(count($this->liste)!=0){
                for($i=0; $i<count($this->liste); $i++){
                    if($this->liste[$i][0]->jour == "lundi"){
                        if($this->liste[$i][0]->heure_debut == "7H"){
                            $this->LUE7 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->LN7 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->LF7 = DB::table('filiere')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "10H05"){
                            $this->LUE10 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->LN10 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->LF10 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "13H05"){
                            $this->LUE13 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->LN13 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->LF13 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "16H05"){
                            $this->LUE16 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->LN16 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->LF16 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "19H05"){
                            $this->LUE19 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->LN19 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->LF19 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                    }
                    if($this->liste[$i][0]->jour == "mardi"){
                        if($this->liste[$i][0]->heure_debut == "7H"){
                            $this->MAUE7 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->MAN7 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->MAF7 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "10H05"){
                            $this->MAUE10 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->MAN10 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->MAF10 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "13H05"){
                            $this->MAUE13 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->MAN13 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->MAF13 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "16H05"){
                            $this->MAUE16 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->MAN16 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->MAF16 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "19H05"){
                            $this->MAUE19 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->MAN19 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->MAF19 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                    }
                    if($this->liste[$i][0]->jour == "mercredi"){
                        if($this->liste[$i][0]->heure_debut == "7H"){
                            $this->MUE7 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->MN7 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->MF7 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "10H05"){
                            $this->MUE10 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->MN10 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->MF10 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "13H05"){
                            $this->MUE13 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->MN13 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->MF13 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "16H05"){
                            $this->MUE16 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->MN16 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->MF16 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "19H05"){
                            $this->MUE19 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->MN19 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->MF19 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                    }
                    if($this->liste[$i][0]->jour == "jeudi"){
                        if($this->liste[$i][0]->heure_debut == "7H"){
                            $this->JUE7 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->JN7 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->JF7 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "10H05"){
                            $this->JUE10 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->JN10 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->JF10 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "13H05"){
                            $this->JUE13 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->JN13 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->JF13 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "16H05"){
                            $this->JUE16 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->JN16 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->JF16 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "19H05"){
                            $this->JUE19 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->JN19 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->JF19 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                    }
                    if($this->liste[$i][0]->jour == "vendredi"){
                        if($this->liste[$i][0]->heure_debut == "7H"){
                            $this->VUE7 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->VN7 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->VF7 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "10H05"){
                            $this->VUE10 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->VN10 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->VF10 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "13H05"){
                            $this->VUE13 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->VN13 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->VF13 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "16H05"){
                            $this->VUE16 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->VN16 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->VF16 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "19H05"){
                            $this->VUE19 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->VN19 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->VF19 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                    }
                    if($this->liste[$i][0]->jour == "samedi"){
                        if($this->liste[$i][0]->heure_debut == "7H"){
                            $this->SUE7 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->SN7 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->SF7 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "10H05"){
                            $this->SUE10 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->SN10 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->SF10 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "13H05"){
                            $this->SUE13 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->SN13 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->SF13 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "16H05"){
                            $this->SUE16 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->SN16 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->SF16 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "19H05"){
                            $this->SUE19 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->SN19 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->SF19 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                    }
                    if($this->liste[$i][0]->jour == "dimanche"){
                        if($this->liste[$i][0]->heure_debut == "7H"){
                            $this->DUE7 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->DN7 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->DF7 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "10H05"){
                            $this->DUE10 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->DN10 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->DF10 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "13H05"){
                            $this->DUE13 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->DN13 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->DF13 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "16H05"){
                            $this->DUE16 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->DN16 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->DF16 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                        if($this->liste[$i][0]->heure_debut == "19H05"){
                            $this->DUE19 = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('code_ue');
                            $niveau = DB::table('ues')->where('id', $this->liste[$i][0]->id_ue)->value('id_niveau');
                            $this->DN19 = DB::table('niveaux')->where('id', $niveau)->value('niveau');
                            $filiere = DB::table('niveaux')->where('id', $niveau)->value('id_filiere');
                            $this->DF19 = DB::table('filieres')->where('id', $filiere)->value('nom_filiere');

                        }
                    }
                }
        } 
        
        

        // dd($this->enseignants);
        return view('livewire.enseignant')->layout('layouts.app2');
    }
}
