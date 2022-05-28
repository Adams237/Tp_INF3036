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


    public function mount(Request $request) {
        $this->filiere = $request->filiere;
        $this->specialite = $request->specialites;
        $this->niveau = $request->niveau;
        $this->E1 = ['code_ue' => $request->matiere1,
                       'jour'=> $request->jour1,
                       'horaire' => $request->horaire1,
                       'salle' => $request->salle1,
                       'enseignant' => $request->enseignant1 
                    ];
        $this->E2 = ['code_ue' => $request->matiere2,
                    'jour'=> $request->jour2,
                    'horaire' => $request->horaire2,
                    'salle' => $request->salle2,
                    'enseignant' => $request->enseignant2 
                 ];
        $this->E3 = ['code_ue' => $request->matiere3,
                       'jour'=> $request->jour3,
                       'horaire' => $request->horaire3,
                       'salle' => $request->salle3,
                       'enseignant' => $request->enseignant3 
                    ];
        $this->E4 = ['code_ue' => $request->matiere4,
                       'jour'=> $request->jour4,
                       'horaire' => $request->horaire4,
                       'salle' => $request->salle4,
                       'enseignant' => $request->enseignant4 
                    ];
        $this->E5 = ['code_ue' => $request->matiere5,
                       'jour'=> $request->jour5,
                       'horaire' => $request->horaire5,
                       'salle' => $request->salle5,
                       'enseignant' => $request->enseignant5 
                    ];
        $this->E6 = ['code_ue' => $request->matiere6,
                       'jour'=> $request->jour6,
                       'horaire' => $request->horaire6,
                       'salle' => $request->salle6,
                       'enseignant' => $request->enseignant6 
                    ];

        $this->E = ['e1' => $this->E1,
                    'e2' => $this->E2,
                    'e3' => $this->E3,
                    'e4' => $this->E4,
                    'e5' => $this->E5,
                    'e6'=> $this->E6
                    ];
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
                    $this->L7 = $e['code_ue'];
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
