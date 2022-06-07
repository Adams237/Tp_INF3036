<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Afficher extends Component
{
    public $niveau;
    public $filiere;   
    public $specialite;
    public $id_filiere;
    public $E1 = [
        'jour' => null,
        'heure' => null,
        'code_ue' =>null,
        'enseignant' => null,
        'salle' => null
    ];
    public $E2 = [
        'jour' => null,
        'heure' => null,
        'code_ue' =>null,
        'enseignant' => null,
        'salle' => null
    ];
    public $E3 = [
        'jour' => null,
        'heure' => null,
        'code_ue' =>null,
        'enseignant' => null,
        'salle' => null
    ];
    public $E4 = [
        'jour' => null,
        'heure' => null,
        'code_ue' =>null,
        'enseignant' => null,
        'salle' => null
    ];
    public $E5 = [
        'jour' => null,
        'heure' => null,
        'code_ue' =>null,
        'enseignant' => null,
        'salle' => null
    ];
    public $E6 = [
        'jour' => null,
        'heure' => null,
        'code_ue' =>null,
        'enseignant' => null,
        'salle' => null
    ];
    public $E7 = [
        'jour' => null,
        'heure' => null,
        'code_ue' =>null,
        'enseignant' => null,
        'salle' => null
    ];
    public $E8 = [
        'jour' => null,
        'heure' => null,
        'code_ue' =>null,
        'enseignant' => null,
        'salle' => null
    ];
    public $E9 = [
        'jour' => null,
        'heure' => null,
        'code_ue' =>null,
        'enseignant' => null,
        'salle' => null
    ];
    public $E = ['e1' => null,
                 'e2' =>null,
                 'e3' => null,
                 'e4' => null,
                 'e5' => null,
                 'e6' =>null,
                 'e7' =>null,
                 'e8' =>null,
                 'e9' =>null,
                ];
    //variable du jour lundi
    public $L7;
    public $LE7;
    public $LS7;
    public $L10;
    public $LE10;
    public $LS10;
    public $L13;
    public $LE13;
    public $LS13;
    public $L16;
    public $LE16;
    public $LS16;
    public $L19;
    public $LE19;
    public $LS19;
    // variable du jour mardi
    public $MA7;
    public $MAE7;
    public $MAS7;
    public $MA10;
    public $MAE10;
    public $MAS10;
    public $MA13;
    public $MAE13;
    public $MAS13;
    public $MA16;
    public $MAE16;
    public $MAS16;
    public $MA19;
    public $MAE19;
    public $MAS19;
    //variable de mercredi
    public $M7;
    public $ME7;
    public $MS7;
    public $M10;
    public $ME10;
    public $MS10;
    public $M13;
    public $ME13;
    public $MS13;
    public $M16;
    public $ME16;
    public $MS16;
    public $M19;
    public $ME19;
    public $MS19;
    //variable du jeudi
    public $J7;
    public $JE7;
    public $JS7;
    public $J10;
    public $JE10;
    public $JS10;
    public $J13;
    public $JE13;
    public $JS13;
    public $J16;
    public $JE16;
    public $JS16;
    public $J19;
    public $JE19;
    public $JS19;
    //variable de vendredi
    public $V7;
    public $VE7;
    public $VS7;
    public $V10;
    public $VE10;
    public $VS10;
    public $V13;
    public $VE13;
    public $VS13;
    public $V16;
    public $VE16;
    public $VS16;
    public $V19;
    public $VE19;
    public $VS19;
    //varible de samedi
    public $S7;
    public $SE7;
    public $SS7;
    public $S10;
    public $SE10;
    public $SS10;
    public $S13;
    public $SE13;
    public $SS13;
    public $S16;
    public $SE16;
    public $SS16;
    public $S19;
    public $SE19;
    public $SS19;
    //variable du dimanche
    public $D7;
    public $DE7;
    public $DS7;
    public $D10;
    public $DE10;
    public $DS10;
    public $D13;
    public $DE13;
    public $DS13;
    public $D16;
    public $DE16;
    public $DS16;
    public $D19;
    public $DE19;
    public $DS19;
    public $id_niveau;
    public $ense = [];
    public $id_ens = [];

    public function mount(Request $request){
        $this->filiere = $request->filiere;
        $this->niveau = $request->niveau;
        $this->id_filiere = $request->id_filiere;
        $this->specialite = $request->choixSpec;
        if($this->niveau>=3){
            $id_spec = DB::table('specialites')->where('nom_spec', $this->specialite)->value('id');
            $this->id_niveau = DB::table('niveaux')->where('niveau', $this->niveau)->where('id_filiere', $this->id_filiere)->where('id_spec', $id_spec)->value('id');
        }
        else{
            $this->id_niveau = DB::table('niveaux')->where('niveau', $this->niveau)->where('id_filiere', $this->id_filiere)->value('id');
        }
        // dd($this->id_niveau);
        $this->ense = DB::table('ues')->join('enseignement_ue', function($join){
            $join->on('enseignement_ue.id_ue', '=', 'ues.id')
            ->where('ues.id_niveau', '=', $this->id_niveau);
        } )->get();
        if(count($this->ense)!=0){
            for($i=0; $i < count($this->ense); $i++){
                $this->id_ens[$i] = DB::table('enseignements')->where('id', $this->ense[$i]->id_ense)->get();
            }
            if(count($this->id_ens)!=0){
                for($i=0; $i< count($this->id_ens); $i++){
                    $id_cours[$i] = DB::table('cours')->where('id_ense', $this->id_ens[$i][0]->id)->get();
                }
                if(count($id_cours)>=1){
                        $this->E1 = [
                        'code_ue' => $this->ense[0]->code_ue,
                        'enseignant' => DB::table('enseignants')->where('id', $this->id_ens[0][0]->id_ens)->value('nom_ens'),
                        'jour' => $id_cours[0][0]->jour,
                        'heure' => $id_cours[0][0]->heure_debut,
                        'salle' => DB::table('salles')->where('id', $id_cours[0][0]->id_salle)->value('nom_salle')
                    ];
                }
                if(count($id_cours)>=2){
                    $this->E2 = [
                    'code_ue' => $this->ense[1]->code_ue,
                    'enseignant' => DB::table('enseignants')->where('id', $this->id_ens[1][0]->id_ens)->value('nom_ens'),
                    'jour' => $id_cours[1][0]->jour,
                    'heure' => $id_cours[1][0]->heure_debut,
                    'salle' => DB::table('salles')->where('id', $id_cours[1][0]->id_salle)->value('nom_salle')
                ];
                }
                if(count($id_cours)>=3){
                    $this->E3 = [
                    'code_ue' => $this->ense[2]->code_ue,
                    'enseignant' => DB::table('enseignants')->where('id', $this->id_ens[2][0]->id_ens)->value('nom_ens'),
                    'jour' => $id_cours[2][0]->jour,
                    'heure' => $id_cours[2][0]->heure_debut,
                    'salle' => DB::table('salles')->where('id', $id_cours[2][0]->id_salle)->value('nom_salle')
                ];
                }
                if(count($id_cours)>=4){
                    $this->E4 = [
                    'code_ue' => $this->ense[3]->code_ue,
                    'enseignant' => DB::table('enseignants')->where('id', $this->id_ens[3][0]->id_ens)->value('nom_ens'),
                    'jour' => $id_cours[3][0]->jour,
                    'heure' => $id_cours[3][0]->heure_debut,
                    'salle' => DB::table('salles')->where('id', $id_cours[3][0]->id_salle)->value('nom_salle')
                ];
                }
                if(count($id_cours)>=5){
                    $this->E5 = [
                    'code_ue' => $this->ense[4]->code_ue,
                    'enseignant' => DB::table('enseignants')->where('id', $this->id_ens[4][0]->id_ens)->value('nom_ens'),
                    'jour' => $id_cours[4][0]->jour,
                    'heure' => $id_cours[4][0]->heure_debut,
                    'salle' => DB::table('salles')->where('id', $id_cours[4][0]->id_salle)->value('nom_salle')
                ];
                }
                if(count($id_cours)>=6){
                    $this->E6 = [
                    'code_ue' => $this->ense[5]->code_ue,
                    'enseignant' => DB::table('enseignants')->where('id', $this->id_ens[5][0]->id_ens)->value('nom_ens'),
                    'jour' => $id_cours[5][0]->jour,
                    'heure' => $id_cours[5][0]->heure_debut,
                    'salle' => DB::table('salles')->where('id', $id_cours[5][0]->id_salle)->value('nom_salle')
                ];
                }
                if(count($id_cours)>=7){
                    $this->E7 = [
                    'code_ue' => $this->ense[6]->code_ue,
                    'enseignant' => DB::table('enseignants')->where('id', $this->id_ens[6][0]->id_ens)->value('nom_ens'),
                    'jour' => $id_cours[6][0]->jour,
                    'heure' => $id_cours[6][0]->heure_debut,
                    'salle' => DB::table('salles')->where('id', $id_cours[6][0]->id_salle)->value('nom_salle')
                ];
                }
                if(count($id_cours)>=8){
                    $this->E8 = [
                    'code_ue' => $this->ense[7]->code_ue,
                    'enseignant' => DB::table('enseignants')->where('id', $this->id_ens[7][0]->id_ens)->value('nom_ens'),
                    'jour' => $id_cours[7][0]->jour,
                    'heure' => $id_cours[7][0]->heure_debut,
                    'salle' => DB::table('salles')->where('id', $id_cours[7][0]->id_salle)->value('nom_salle')
                ];
                }
                if(count($id_cours)>=9){
                    $this->E9 = [
                    'code_ue' => $this->ense[8]->code_ue,
                    'enseignant' => DB::table('enseignants')->where('id', $this->id_ens[8][0]->id_ens)->value('nom_ens'),
                    'jour' => $id_cours[8][0]->jour,
                    'heure' => $id_cours[8][0]->heure_debut,
                    'salle' => DB::table('salles')->where('id', $id_cours[8][0]->id_salle)->value('nom_salle')
                ];
                }
                
            }
        
        }
        
        
        

        $this->E = [
            'e1' => $this->E1,
            'e2' => $this->E2,
            'e3' => $this->E3,
            'e4' => $this->E4,
            'e5' => $this->E5,
            'e6' => $this->E6,
            'e7' => $this->E7,
            'e8' => $this->E8,
            'e9' => $this->E9,
        ];
    }

    public function render()
    {
        foreach($this->E as $e){
            // dd($e1);
            if($e['jour']=='lundi'){
                if($e['heure']== '7H'){
                    // dd($e);
                    $this->L7 = $e['code_ue'];
                    $this->LE7 = $e['enseignant'];
                    $this->LS7 = $e['salle'];
                }
                if($e['heure'] == '10H05'){
                    // dd($e);
                    $this->L10 = $e['code_ue'];
                    $this->LE10 = $e['enseignant'];
                    $this->LS10 = $e['salle'];
                }
                if($e['heure'] == '13H05'){
                    // dd($e);
                    $this->L13 = $e['code_ue'];
                    $this->LE13 = $e['enseignant'];
                    $this->LS13 = $e['salle'];
                }
                if($e['heure'] == '16H05'){
                    // dd($e);
                    $this->L16 = $e['code_ue'];
                    $this->LE16 = $e['enseignant'];
                    $this->LS16 = $e['salle'];
                }
                if($e['heure'] == '19H05'){
                    // dd($e);
                    $this->L19 = $e['code_ue'];
                    $this->LE19 = $e['enseignant'];
                    $this->LS19 = $e['salle'];
                }
            }
            if($e['jour']=='mardi'){
                if($e['heure']== '7H'){
                    // dd($e);
                    $this->MA7 = $e['code_ue'];
                    $this->MAE7 = $e['enseignant'];
                    $this->MAS7 = $e['salle'];
                }
                if($e['heure'] == '10H05'){
                    // dd($e);
                    $this->MA10 = $e['code_ue'];
                    $this->MAE10 = $e['enseignant'];
                    $this->MAS10 = $e['salle'];
                }
                if($e['heure'] == '13H05'){
                    // dd($e);
                    $this->MA13 = $e['code_ue'];
                    $this->MAE13 = $e['enseignant'];
                    $this->MAS13 = $e['salle'];
                }
                if($e['heure'] == '16H05'){
                    // dd($e);
                    $this->MA16 = $e['code_ue'];
                    $this->MAE16 = $e['enseignant'];
                    $this->MAS16 = $e['salle'];
                }
                if($e['heure'] == '19H05'){
                    // dd($e);
                    $this->MA19 = $e['code_ue'];
                    $this->MAE19 = $e['enseignant'];
                    $this->MAS19 = $e['salle'];
                }
            }
            if($e['jour']=='mercredi'){
                if($e['heure']== '7H'){
                    // dd($e);
                    $this->M7 = $e['code_ue'];
                    $this->ME7 = $e['enseignant'];
                    $this->MS7 = $e['salle'];
                }
                if($e['heure'] == '10H05'){
                    // dd($e);
                    $this->M10 = $e['code_ue'];
                    $this->ME10 = $e['enseignant'];
                    $this->MS10 = $e['salle'];
                }
                if($e['heure'] == '13H05'){
                    // dd($e);
                    $this->M13 = $e['code_ue'];
                    $this->ME13 = $e['enseignant'];
                    $this->MS13 = $e['salle'];
                }
                if($e['heure'] == '16H05'){
                    // dd($e);
                    $this->M16 = $e['code_ue'];
                    $this->ME16 = $e['enseignant'];
                    $this->MS16 = $e['salle'];
                }
                if($e['heure'] == '19H05'){
                    // dd($e);
                    $this->M19 = $e['code_ue'];
                    $this->ME19 = $e['enseignant'];
                    $this->MS19 = $e['salle'];
                }
            }
            if($e['jour']=='jeudi'){
                if($e['heure']== '7H'){
                    // dd($e);
                    $this->J7 = $e['code_ue'];
                    $this->JE7 = $e['enseignant'];
                    $this->JS7 = $e['salle'];
                }
                if($e['heure'] == '10H05'){
                    // dd($e);
                    $this->J10 = $e['code_ue'];
                    $this->JE10 = $e['enseignant'];
                    $this->JS10 = $e['salle'];
                }
                if($e['heure'] == '13H05'){
                    // dd($e);
                    $this->J13 = $e['code_ue'];
                    $this->JE13 = $e['enseignant'];
                    $this->JS13 = $e['salle'];
                }
                if($e['heure'] == '16H05'){
                    // dd($e);
                    $this->J16 = $e['code_ue'];
                    $this->JE16 = $e['enseignant'];
                    $this->JS16 = $e['salle'];
                }
                if($e['heure'] == '19H05'){
                    // dd($e);
                    $this->J19 = $e['code_ue'];
                    $this->JE19 = $e['enseignant'];
                    $this->JS19 = $e['salle'];
                }
            }
            if($e['jour']=='vendredi'){
                if($e['heure']== '7H'){
                    // dd($e);
                    $this->V7 = $e['code_ue'];
                    $this->VE7 = $e['enseignant'];
                    $this->VS7 = $e['salle'];
                }
                if($e['heure'] == '10H05'){
                    // dd($e);
                    $this->V10 = $e['code_ue'];
                    $this->VE10 = $e['enseignant'];
                    $this->VS10 = $e['salle'];
                }
                if($e['heure'] == '13H05'){
                    // dd($e);
                    $this->V13 = $e['code_ue'];
                    $this->VE13 = $e['enseignant'];
                    $this->VS13 = $e['salle'];
                }
                if($e['heure'] == '16H05'){
                    // dd($e);
                    $this->V16 = $e['code_ue'];
                    $this->VE16 = $e['enseignant'];
                    $this->VS16 = $e['salle'];
                }
                if($e['heure'] == '19H05'){
                    // dd($e);
                    $this->V19 = $e['code_ue'];
                    $this->VE19 = $e['enseignant'];
                    $this->VS19 = $e['salle'];
                }
            }
            if($e['jour']=='samedi'){
                if($e['heure']== '7H'){
                    // dd($e);
                    $this->S7 = $e['code_ue'];
                    $this->SE7 = $e['enseignant'];
                    $this->SS7 = $e['salle'];
                }
                if($e['heure'] == '10H05'){
                    // dd($e);
                    $this->S10 = $e['code_ue'];
                    $this->SE10 = $e['enseignant'];
                    $this->SS10 = $e['salle'];
                }
                if($e['heure'] == '13H05'){
                    // dd($e);
                    $this->S13 = $e['code_ue'];
                    $this->SE13 = $e['enseignant'];
                    $this->SS13 = $e['salle'];
                }
                if($e['heure'] == '16H05'){
                    // dd($e);
                    $this->S16 = $e['code_ue'];
                    $this->SE16 = $e['enseignant'];
                    $this->SS16 = $e['salle'];
                }
                if($e['heure'] == '19H05'){
                    // dd($e);
                    $this->S19 = $e['code_ue'];
                    $this->SE19 = $e['enseignant'];
                    $this->SS19 = $e['salle'];
                }
            }
            if($e['jour']=='dimanche'){
                if($e['heure']== '7H'){
                    // dd($e);
                    $this->D7 = $e['code_ue'];
                    $this->DE7 = $e['enseignant'];
                    $this->DS7 = $e['salle'];
                }
                if($e['heure'] == '10H05'){
                    // dd($e);
                    $this->D10 = $e['code_ue'];
                    $this->DE10 = $e['enseignant'];
                    $this->DS10 = $e['salle'];
                }
                if($e['heure'] == '13H05'){
                    // dd($e);
                    $this->D13 = $e['code_ue'];
                    $this->DE13 = $e['enseignant'];
                    $this->DS13 = $e['salle'];
                }
                if($e['heure'] == '16H05'){
                    // dd($e);
                    $this->D16 = $e['code_ue'];
                    $this->DE16 = $e['enseignant'];
                    $this->DS16 = $e['salle'];
                }
                if($e['heure'] == '19H05'){
                    // dd($e);
                    $this->D19 = $e['code_ue'];
                    $this->DE19 = $e['enseignant'];
                    $this->DS19 = $e['salle'];
                }
            }

        }   
        return view('livewire.afficher')->layout('layouts.app2');
    }
}
