<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EmploiDeTemps extends Component
{
    public $filiere;
    public $specialite;
    public $niveau;
    public $E1 = [];
    public $E2 = [];
    public $E3 = [];
    public $E4 = [];
    public $E5 = [];
    public $E6 = [];
    public $E = ['e1' => null,
                 'e2' =>null,
                 'e3' => null,
                 'e4' => null,
                 'e5' => null,
                 'e6' =>null
                ];
    public $L7;
    public $L10;
    public $L13;
    public $L16;
    public $L19;
    public $MA7;
    public $MA10;
    public $MA13;
    public $MA16;
    public $MA19;
    public $M7;
    public $M10;
    public $M13;
    public $M16;
    public $M19;
    public $J7;
    public $J10;
    public $J13;
    public $J16;
    public $J19;
    public $V7;
    public $V10;
    public $V13;
    public $V16;
    public $V19;
    public $S7;
    public $S10;
    public $S13;
    public $S16;
    public $S19;
    public $D7;
    public $D10;
    public $D13;
    public $D16;
    public $D19;
    public $id1;
    public $id2;
    public $id3;
    public $id4;
    public $id5;
    public $id6;
    public $id_ens1;
    public $id_ens2;
    public $id_ens3;
    public $id_ens4;
    public $id_ens5;
    public $id_ens6;
    public $id_salle1;
    public $id_salle2;
    public $id_salle3;
    public $id_salle4;
    public $id_salle5;
    public $id_salle6;


    public function mount(Request $request) {
        $this->filiere = $request->filiere;
        $this->specialite = $request->specialites;
        $this->niveau = $request->niveau;
        $this->id1 = $request->matiere1;
        $this->id2 = $request->matiere2;
        $this->id3 = $request->matiere3;
        $this->id4 = $request->matiere4;
        $this->id5 = $request->matiere5;
        $this->id6 = $request->matiere6;
        $this->id_ens1 = $request->enseignant1;
        $this->id_ens2 = $request->enseignant2;
        $this->id_ens3 = $request->enseignant3;
        $this->id_ens4 = $request->enseignant4;
        $this->id_ens5 = $request->enseignant5;
        $this->id_ens6 = $request->enseignant6;
        $this->id_salle1 = $request->salle1;
        $this->id_salle2 = $request->salle2;
        $this->id_salle3 = $request->salle3;
        $this->id_salle4 = $request->salle4;
        $this->id_salle5 = $request->salle5;
        $this->id_salle6 = $request->salle6;
        $this->E1 = ['code_ue' => DB::table('ues')->where('id', $request->matiere1)->value('code_ue'),
                       'jour'=> $request->jour1,
                       'horaire' => $request->horaire1,
                       'salle' => DB::table('salles')->where('id', $request->salle1)->value('nom_salle'),
                       'enseignant' => DB::table('enseignants')->where('id', $request->enseignant1)->value('nom_ens') 
                    ];
        $this->E2 = ['code_ue' => DB::table('ues')->where('id', $request->matiere2)->value('code_ue'),
                    'jour'=> $request->jour2,
                    'horaire' => $request->horaire2,
                    'salle' => DB::table('salles')->where('id', $request->salle2)->value('nom_salle'),
                    'enseignant' => DB::table('enseignants')->where('id', $request->enseignant2)->value('nom_ens')
                 ];
        $this->E3 = ['code_ue' => DB::table('ues')->where('id', $request->matiere3)->value('code_ue'),
                       'jour'=> $request->jour3,
                       'horaire' => $request->horaire3,
                       'salle' => DB::table('salles')->where('id', $request->salle3)->value('nom_salle'),
                       'enseignant' => DB::table('enseignants')->where('id', $request->enseignant3)->value('nom_ens')
                    ];
        $this->E4 = ['code_ue' => DB::table('ues')->where('id', $request->matiere4)->value('code_ue'),
                       'jour'=> $request->jour4,
                       'horaire' => $request->horaire4,
                       'salle' => DB::table('salles')->where('id', $request->salle4)->value('nom_salle'),
                       'enseignant' => DB::table('enseignants')->where('id', $request->enseignant4)->value('nom_ens')
                    ];
        $this->E5 = ['code_ue' => DB::table('ues')->where('id', $request->matiere5)->value('code_ue'),
                       'jour'=> $request->jour5,
                       'horaire' => $request->horaire5,
                       'salle' => DB::table('salles')->where('id', $request->salle5)->value('nom_salle'),
                       'enseignant' => DB::table('enseignants')->where('id', $request->enseignant5)->value('nom_ens')
                    ];
        $this->E6 = ['code_ue' => DB::table('ues')->where('id', $request->matiere6)->value('code_ue'),
                       'jour'=> $request->jour6,
                       'horaire' => $request->horaire6,
                       'salle' => DB::table('salles')->where('id', $request->salle6)->value('nom_salle'),
                       'enseignant' => DB::table('enseignants')->where('id', $request->enseignant6)->value('nom_ens')
                    ];

        $this->E = ['e1' => $this->E1,
                    'e2' => $this->E2,
                    'e3' => $this->E3,
                    'e4' => $this->E4,
                    'e5' => $this->E5,
                    'e6'=> $this->E6
                    ];
    }
   
    
    public function envoyer(Request $request){
        $id_filiere = DB::table('filieres')->where('nom_filiere', $this->filiere)->value('id');
        if(!empty($this->E1)){
            DB::table('enseignements')->insert(['heure_debut' => $this->E1['horaire'], 'id_ens' => $this->id_ens1, 'id_filiere' => $id_filiere]);
            $id_ense = DB::table('enseignements')->max('id');
            DB::table('enseignement_ue')->insert(['id_ense' => $id_ense, 'id_ue' => $this->id1]);
            DB::table('cours')->insert(['jour' => $this->E1['jour'], 'heure_debut' => $this->E1['horaire'], 'id_ense' => $id_ense, 'id_salle' => $this->id_salle1]);
        }
        if(!empty($this->E2)){
            DB::table('enseignements')->insert(['heure_debut' => $this->E2['horaire'], 'id_ens' => $this->id_ens2, 'id_filiere' => $id_filiere]);
            $id_ense = DB::table('enseignements')->max('id');
            DB::table('enseignement_ue')->insert(['id_ense' => $id_ense, 'id_ue' => $this->id2]);
            DB::table('cours')->insert(['jour' => $this->E2['jour'], 'heure_debut' => $this->E2['horaire'], 'id_ense' => $id_ense, 'id_salle' => $this->id_salle2]);
        }
        if(!empty($this->E3)){
            DB::table('enseignements')->insert(['heure_debut' => $this->E3['horaire'], 'id_ens' => $this->id_ens3, 'id_filiere' => $id_filiere]);
            $id_ense = DB::table('enseignements')->max('id');
            DB::table('enseignement_ue')->insert(['id_ense' => $id_ense, 'id_ue' => $this->id3]);
            DB::table('cours')->insert(['jour' => $this->E3['jour'], 'heure_debut' => $this->E3['horaire'], 'id_ense' => $id_ense, 'id_salle' => $this->id_salle3]);
        }
        if(!empty($this->E4)){
            DB::table('enseignements')->insert(['heure_debut' => $this->E4['horaire'], 'id_ens' => $this->id_ens4, 'id_filiere' => $id_filiere]);
            $id_ense = DB::table('enseignements')->max('id');
            DB::table('enseignement_ue')->insert(['id_ense' => $id_ense, 'id_ue' => $this->id4]);
            DB::table('cours')->insert(['jour' => $this->E4['jour'], 'heure_debut' => $this->E4['horaire'], 'id_ense' => $id_ense, 'id_salle' => $this->id_salle4]);
        }
        if(!empty($this->E5)){
            DB::table('enseignements')->insert(['heure_debut' => $this->E5['horaire'], 'id_ens' => $this->id_ens5, 'id_filiere' => $id_filiere]);
            $id_ense = DB::table('enseignements')->max('id');
            DB::table('enseignement_ue')->insert(['id_ense' => $id_ense, 'id_ue' => $this->id5]);
            DB::table('cours')->insert(['jour' => $this->E5['jour'], 'heure_debut' => $this->E5['horaire'], 'id_ense' => $id_ense, 'id_salle' => $this->id_salle5]);
        }
        if(!empty($this->E6)){
            DB::table('enseignements')->insert(['heure_debut' => $this->E6['horaire'], 'id_ens' => $this->id_ens6, 'id_filiere' => $id_filiere]);
            $id_ense = DB::table('enseignements')->max('id');
            DB::table('enseignement_ue')->insert(['id_ense' => $id_ense, 'id_ue' => $this->id6]);
            DB::table('cours')->insert(['jour' => $this->E6['jour'], 'heure_debut' => $this->E6['horaire'], 'id_ense' => $id_ense, 'id_salle' => $this->id_salle6]);
        }
    }

    public function render()
    {

        foreach($this->E as $e){
            // dd($e1);
            if($e['jour']=='lundi'){
                if($e['horaire']== '7H'){
                    // dd($e);
                    $this->L7 = $e['code_ue'];
                }
                if($e['horaire'] == '10H05'){
                    // dd($e);
                    $this->L10 = $e['code_ue'];
                }
                if($e['horaire'] == '13H05'){
                    // dd($e);
                    $this->L13 = $e['code_ue'];
                }
                if($e['horaire'] == '16H05'){
                    // dd($e);
                    $this->L16 = $e['code_ue'];
                }
                if($e['horaire'] == '19H05'){
                    // dd($e);
                    $this->L19 = $e['code_ue'];
                }
            }
            if($e['jour']=='mardi'){
                if($e['horaire']== '7H'){
                    // dd($e);
                    $this->MA7 = $e['code_ue'];
                }
                if($e['horaire'] == '10H05'){
                    // dd($e);
                    $this->MA10 = $e['code_ue'];
                }
                if($e['horaire'] == '13H05'){
                    // dd($e);
                    $this->MA13 = $e['code_ue'];
                }
                if($e['horaire'] == '16H05'){
                    // dd($e);
                    $this->MA16 = $e['code_ue'];
                }
                if($e['horaire'] == '19H05'){
                    // dd($e);
                    $this->MA19 = $e['code_ue'];
                }
            }
            if($e['jour']=='mercredi'){
                if($e['horaire']== '7H'){
                    // dd($e);
                    $this->M7 = $e['code_ue'];
                }
                if($e['horaire'] == '10H05'){
                    // dd($e);
                    $this->M10 = $e['code_ue'];
                }
                if($e['horaire'] == '13H05'){
                    // dd($e);
                    $this->M13 = $e['code_ue'];
                }
                if($e['horaire'] == '16H05'){
                    // dd($e);
                    $this->M16 = $e['code_ue'];
                }
                if($e['horaire'] == '19H05'){
                    // dd($e);
                    $this->M19 = $e['code_ue'];
                }
            }
            if($e['jour']=='jeudi'){
                if($e['horaire']== '7H'){
                    // dd($e);
                    $this->J7 = $e['code_ue'];
                }
                if($e['horaire'] == '10H05'){
                    // dd($e);
                    $this->J10 = $e['code_ue'];
                }
                if($e['horaire'] == '13H05'){
                    // dd($e);
                    $this->J13 = $e['code_ue'];
                }
                if($e['horaire'] == '16H05'){
                    // dd($e);
                    $this->J16 = $e['code_ue'];
                }
                if($e['horaire'] == '19H05'){
                    // dd($e);
                    $this->J19 = $e['code_ue'];
                }
            }
            if($e['jour']=='vendredi'){
                if($e['horaire']== '7H'){
                    // dd($e);
                    $this->V7 = $e['code_ue'];
                }
                if($e['horaire'] == '10H05'){
                    // dd($e);
                    $this->V10 = $e['code_ue'];
                }
                if($e['horaire'] == '13H05'){
                    // dd($e);
                    $this->V13 = $e['code_ue'];
                }
                if($e['horaire'] == '16H05'){
                    // dd($e);
                    $this->V16 = $e['code_ue'];
                }
                if($e['horaire'] == '19H05'){
                    // dd($e);
                    $this->V19 = $e['code_ue'];
                }
            }
            if($e['jour']=='samedi'){
                if($e['horaire']== '7H'){
                    // dd($e);
                    $this->S7 = $e['code_ue'];
                }
                if($e['horaire'] == '10H05'){
                    // dd($e);
                    $this->S10 = $e['code_ue'];
                }
                if($e['horaire'] == '13H05'){
                    // dd($e);
                    $this->S13 = $e['code_ue'];
                }
                if($e['horaire'] == '16H05'){
                    // dd($e);
                    $this->S16 = $e['code_ue'];
                }
                if($e['horaire'] == '19H05'){
                    // dd($e);
                    $this->S19 = $e['code_ue'];
                }
            }
            if($e['jour']=='dimanche'){
                if($e['horaire']== '7H'){
                    // dd($e);
                    $this->D7 = $e['code_ue'];
                }
                if($e['horaire'] == '10H05'){
                    // dd($e);
                    $this->D10 = $e['code_ue'];
                }
                if($e['horaire'] == '13H05'){
                    // dd($e);
                    $this->D13 = $e['code_ue'];
                }
                if($e['horaire'] == '16H05'){
                    // dd($e);
                    $this->D16 = $e['code_ue'];
                }
                if($e['horaire'] == '19H05'){
                    // dd($e);
                    $this->D19 = $e['code_ue'];
                }
            }

        }
        
        
        return view('livewire.emploiDeTemps')->layout('layouts.app2');
    }

    
}
