<div>
<div class="card">
        <div class="card-body p-4">
            <div class="p-3">
                <form method="POST" action="{{ route('emploiDeTemps') }}" enctype="multipart/form-data">
                    {{ $filiere }} {{ $specialites }} {{ $niveau }} {{ $effectif }}
                    <input type="hidden" name="filiere" value="{{ $filiere }}">
                    <input type="hidden" name="specialites" value="{{ $specialites }}">
                    <input type="hidden" name="niveau" value="{{ $niveau }}">
                    @csrf
                    <div class="form-group">
                        <label>{{ __("1") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere1" name="matiere1" id="matiere1"class="form-control bg-soft-light border-light @error('matiere1') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues as $ue)
                                        <option value="{{ $ue->id }}">{{ $ue->code_ue }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="jour1" name="jour1" id="jour1"class="form-control bg-soft-light border-light @error('jour1') is-invalid @enderror"  required >
                                    <option value="">jour</option>
                                    <option value="lundi">lundi</option>
                                    <option value="mardi">mardi</option>
                                    <option value="mercredi">mercredi</option>
                                    <option value="jeudi">jeudi</option>
                                    <option value="vendredi">vendredi</option>
                                    <option value="samedi">samedi</option>
                                    <option value="dimanche">dimanche</option>
                                </select>
                                <select wire:model="horaire1" name="horaire1" id="horaire1"class="form-control bg-soft-light border-light @error('horaire1') is-invalid @enderror"  required >
                                    <option value="">horaire</option>
                                    <option value="7H">7H-9H55</option>
                                    <option value="10H05">10H05-12H55</option>
                                    <option value="13H05">13H05-15H55</option>
                                    <option value="16H05">16H05-18H55</option>
                                    <option value="19H05">19H05-21H55</option>
                                </select>
                                <select wire:model="salle1" name="salle1" id="salle1"class="form-control bg-soft-light border-light @error('salle1') is-invalid @enderror"  required >
                                    <option value="">salle/capacité</option>
                                        @if($i<=0)
                                            @foreach($salles1 as $salle)
                                                <option value="{{ $salle->id }}">{{ $salle->nom_salle }}: {{ $salle->capacite }}</option>
                                            @endforeach
                                        @endif
                                        @if($i==1)
                                            @foreach($salles1 as $salle)
                                                <option value="{{ $salle['id'] }}">{{ $salle['nom_salle'] }}: {{ $salle['capacite'] }}</option>
                                            @endforeach
                                        @endif
                                </select>
                                <select wire:model="enseignant1" name="enseignant1" id="enseignant1"class="form-control bg-soft-light border-light @error('enseignant1') is-invalid @enderror"   required >
                                    <option value="">enseignant</option>
                                    @if($i<=0)
                                        @if(!empty($enseignants1))
                                            @foreach($enseignants1 as $enseignant)
                                                <option value="{{ $enseignant->id }}">{{ $enseignant->nom_ens }}/ </option>
                                            @endforeach
                                        @endif
                                    @endif()
                                    @if($i==1)
                                        @if(!empty($enseignants1))
                                            @foreach($enseignants1 as $enseignant)
                                                <option value="{{ $enseignant['id'] }}">{{ $enseignant['nom_ens'] }}/ </option>
                                            @endforeach
                                        @endif
                                    @endif
                                </select>
                            
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @if($nbre_ue2!=0 and !empty($salle1) and !empty($jour1) and !empty($horaire1) and !empty($enseignant1))
                    <div class="form-group">
                        <label>{{ __("2") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere2" name="matiere2" id="matiere2"class="form-control bg-soft-light border-light @error('matiere2') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues2 as $ue)
                                    <option value="{{ $ue->id }}">{{ $ue->code_ue }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="jour2" name="jour2" id="jour2"class="form-control bg-soft-light border-light @error('jour2') is-invalid @enderror"  required >
                                    <option value="">jour</option>
                                    <option value="lundi">lundi</option>
                                    <option value="mardi">mardi</option>
                                    <option value="mercredi">mercredi</option>
                                    <option value="jeudi">jeudi</option>
                                    <option value="vendredi">vendredi</option>
                                    <option value="samedi">samedi</option>
                                    <option value="dimanche">dimanche</option>
                                </select>
                                <select wire:model="horaire2" name="horaire2" id="horaire2"class="form-control bg-soft-light border-light @error('horaire2') is-invalid @enderror"  required >
                                    <option value="">horaire</option>
                                    <option value="7H">7H-9H55</option>
                                    <option value="10H05">10H05-12H55</option>
                                    <option value="13H05">13H05-15H55</option>
                                    <option value="16H05">16H05-18H55</option>
                                    <option value="19H05">19H05-21H55</option>
                                </select>
                                <select wire:model="salle2" name="salle2" id="salle2"class="form-control bg-soft-light border-light @error('salle2') is-invalid @enderror"  required >
                                    <option value="">salle/capacité</option>
                                    @if(!empty($salles2))
                                        @foreach($salles2 as $salle)
                                            <option value="{{ $salle->id }}">{{ $salle->nom_salle }}: {{ $salle->capacite }}</option>
                                        @endforeach
                                    @else
                                        <option value="">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                                <select wire:model="enseignant2" name="enseignant2" id="enseignant2"class="form-control bg-soft-light border-light @error('enseignant2') is-invalid @enderror"   required >
                                    <option value="">enseignant</option>
                                    @if(!empty($enseignants2))
                                        @foreach($enseignants2 as $enseignant)
                                            <option value="{{ $enseignant->id }}">{{ $enseignant->nom_ens }}</option>
                                        @endforeach
                                    @else
                                        <option value="">changer de jour ou d'heure</option>
                                    @endif
                                </select>
                            
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endif
                    @if($nbre_ue3!=0 and !empty($salle2) and !empty($jour2) and !empty($horaire2) and !empty($enseignant2))
                    <div class="form-group">
                        <label>{{ __("3") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere3" name="matiere3" id="matiere3"class="form-control bg-soft-light border-light @error('matiere3') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues3 as $ue)
                                    <option value="{{ $ue->id }}">{{ $ue->code_ue }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="jour3" name="jour3" id="jour3"class="form-control bg-soft-light border-light @error('jour3') is-invalid @enderror"  required >
                                    <option value="">jour</option>
                                    <option value="lundi">lundi</option>
                                    <option value="mardi">mardi</option>
                                    <option value="mercredi">mercredi</option>
                                    <option value="jeudi">jeudi</option>
                                    <option value="vendredi">vendredi</option>
                                    <option value="samedi">samedi</option>
                                    <option value="dimanche">dimanche</option>
                                </select>
                                <select wire:model="horaire3" name="horaire3" id="horaire3"class="form-control bg-soft-light border-light @error('horaire3') is-invalid @enderror"  required >
                                    <option value="">horaire</option>
                                    <option value="7H">7H-9H55</option>
                                    <option value="10H05">10H05-12H55</option>
                                    <option value="13H05">13H05-15H55</option>
                                    <option value="16H05">16H05-18H55</option>
                                    <option value="19H05">19H05-21H55</option>
                                </select>
                                <select wire:model="salle3" name="salle3" id="salle3"class="form-control bg-soft-light border-light @error('salle3') is-invalid @enderror"  required >
                                    <option value="">salle/capacité</option>
                                    @if(!empty($salles3))
                                        @foreach($salles3 as $salle)
                                            <option value="{{ $salle->id }}">{{ $salle->nom_salle }}: {{ $salle->capacite }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                                <select wire:model="enseignant3" name="enseignant3" id="enseignant3"class="form-control bg-soft-light border-light @error('enseignant3') is-invalid @enderror"   required >
                                    <option value="">enseignant</option>
                                    @if(!empty($enseignants3))
                                        @foreach($enseignants3 as $enseignant)
                                            <option value="{{ $enseignant->id }}">{{ $enseignant->nom_ens }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif

                                </select>
                            
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endif
                    @if($nbre_ue4!=0 and !empty($salle3) and !empty($jour3) and !empty($horaire3) and !empty($enseignant3))
                    <div class="form-group">
                        <label>{{ __("4") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere4" name="matiere4" id="matiere4"class="form-control bg-soft-light border-light @error('matiere4') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues4 as $ue)
                                    <option value="{{ $ue->id }}">{{ $ue->code_ue }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="jour4" name="jour4" id="jour4"class="form-control bg-soft-light border-light @error('jour4') is-invalid @enderror"  required >
                                    <option value="">jour</option>
                                    <option value="lundi">lundi</option>
                                    <option value="mardi">mardi</option>
                                    <option value="mercredi">mercredi</option>
                                    <option value="jeudi">jeudi</option>
                                    <option value="vendredi">vendredi</option>
                                    <option value="samedi">samedi</option>
                                    <option value="dimanche">dimanche</option>
                                </select>
                                <select wire:model="horaire4" name="horaire4" id="horaire4"class="form-control bg-soft-light border-light @error('horaire4') is-invalid @enderror"  required >
                                    <option value="">horaire</option>
                                    <option value="7H">7H-9H55</option>
                                    <option value="10H05">10H05-12H55</option>
                                    <option value="13H05">13H05-15H55</option>
                                    <option value="16H05">16H05-18H55</option>
                                    <option value="19H05">19H05-21H55</option>
                                </select>
                                <select wire:model="salle4" name="salle4" id="salle4"class="form-control bg-soft-light border-light @error('salle4') is-invalid @enderror"  required >
                                    <option value="">salle/capacité</option>
                                    @if(!empty($salles4))
                                        @foreach($salles4 as $salle)
                                            <option value="{{ $salle->id }}">{{ $salle->nom_salle }}: {{ $salle->capacite }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                                <select wire:model="enseignant4" name="enseignant4" id="enseignant4"class="form-control bg-soft-light border-light @error('enseignant4') is-invalid @enderror"   required >
                                    <option value="">enseignant</option>
                                    @if(!empty($enseignants4))
                                        @foreach($enseignants4 as $enseignant)
                                            <option value="{{ $enseignant->id }}">{{ $enseignant->nom_ens }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                            
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endif
                    @if($nbre_ue5!=0 and !empty($salle4) and !empty($jour4) and !empty($horaire4) and !empty($enseignant4))
                    <div class="form-group">
                        <label>{{ __("5") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere5" name="matiere5" id="matiere5"class="form-control bg-soft-light border-light @error('matiere5') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues5 as $ue)
                                    <option value="{{ $ue->id }}">{{ $ue->code_ue }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="jour5" name="jour5" id="jour5"class="form-control bg-soft-light border-light @error('jour5') is-invalid @enderror"  required >
                                    <option value="">jour</option>
                                    <option value="lundi">lundi</option>
                                    <option value="mardi">mardi</option>
                                    <option value="mercredi">mercredi</option>
                                    <option value="jeudi">jeudi</option>
                                    <option value="vendredi">vendredi</option>
                                    <option value="samedi">samedi</option>
                                    <option value="dimanche">dimanche</option>
                                </select>
                                <select wire:model="horaire5" name="horaire5" id="horaire5"class="form-control bg-soft-light border-light @error('horaire5') is-invalid @enderror"  required >
                                    <option value="">horaire</option>
                                    <option value="7H">7H-9H55</option>
                                    <option value="10H05">10H05-12H55</option>
                                    <option value="13H05">13H05-15H55</option>
                                    <option value="16H05">16H05-18H55</option>
                                    <option value="19H05">19H05-21H55</option>
                                </select>
                                <select wire:model="salle5" name="salle5" id="salle5"class="form-control bg-soft-light border-light @error('salle5') is-invalid @enderror"  required >
                                    <option value="">salle/capacité</option>
                                    @if(!empty($salles5))
                                        @foreach($salles5 as $salle)
                                            <option value="{{ $salle->id }}">{{ $salle->nom_salle }}: {{ $salle->capacite }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                                <select wire:model="enseignant5" name="enseignant5" id="enseignant5"class="form-control bg-soft-light border-light @error('enseignant5') is-invalid @enderror"   required >
                                    <option value="">enseignant</option>
                                    @if(!empty($enseignants5))
                                        @foreach($enseignants5 as $enseignant)
                                            <option value="{{ $enseignant->id }}">{{ $enseignant->nom_ens }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                            
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endif
                    @if($nbre_ue6!=0 and !empty($salle5) and !empty($jour5) and !empty($horaire5) and !empty($enseignant5))
                    <div class="form-group">
                        <label>{{ __("6") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere6" name="matiere6" id="matiere6"class="form-control bg-soft-light border-light @error('matiere6') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues6 as $ue)
                                    <option value="{{ $ue->id }}">{{ $ue->code_ue }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="jour6" name="jour6" id="jour6"class="form-control bg-soft-light border-light @error('jour6') is-invalid @enderror"  required >
                                    <option value="">jour</option>
                                    <option value="lundi">lundi</option>
                                    <option value="mardi">mardi</option>
                                    <option value="mercredi">mercredi</option>
                                    <option value="jeudi">jeudi</option>
                                    <option value="vendredi">vendredi</option>
                                    <option value="samedi">samedi</option>
                                    <option value="dimanche">dimanche</option>
                                </select>
                                <select wire:model="horaire6" name="horaire6" id="horaire6"class="form-control bg-soft-light border-light @error('horaire4') is-invalid @enderror"  required >
                                    <option value="">horaire</option>
                                    <option value="7H">7H-9H55</option>
                                    <option value="10H05">10H05-12H55</option>
                                    <option value="13H05">13H05-15H55</option>
                                    <option value="16H05">16H05-18H55</option>
                                    <option value="19H05">19H05-21H55</option>
                                </select>
                                <select wire:model="salle6" name="salle6" id="salle6"class="form-control bg-soft-light border-light @error('salle6') is-invalid @enderror"  required >
                                    <option value="">salle/capacité</option>
                                    @if(!empty($salles6))
                                        @foreach($salles6 as $salle)
                                            <option value="{{ $salle->id }}">{{ $salle->nom_salle }}: {{ $salle->capacite }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                                <select wire:model="enseignant6" name="enseignant6" id="enseignant6"class="form-control bg-soft-light border-light @error('enseignant6') is-invalid @enderror"   required >
                                    <option value="">enseignant</option>
                                    @if(!empty($enseignants6))
                                        @foreach($enseignants6 as $enseignant)
                                            <option value="{{ $enseignant->id }}">{{ $enseignant->nom_ens }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                            
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endif
                    @if($nbre_ue7!=0 and !empty($salle6)  and !empty($jour6) and !empty($horaire6) and !empty($enseignant6))
                    <div class="form-group">
                        <label>{{ __("7") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere7" name="matiere7" id="matiere7"class="form-control bg-soft-light border-light @error('matiere7') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues7 as $ue)
                                    <option value="{{ $ue->id }}">{{ $ue->code_ue }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="jour7" name="jour7" id="jour7"class="form-control bg-soft-light border-light @error('jour7') is-invalid @enderror"  required >
                                    <option value="">jour</option>
                                    <option value="lundi">lundi</option>
                                    <option value="mardi">mardi</option>
                                    <option value="mercredi">mercredi</option>
                                    <option value="jeudi">jeudi</option>
                                    <option value="vendredi">vendredi</option>
                                    <option value="samedi">samedi</option>
                                    <option value="dimanche">dimanche</option>
                                </select>
                                <select wire:model="horaire7" name="horaire7" id="horaire7"class="form-control bg-soft-light border-light @error('horaire7') is-invalid @enderror"  required >
                                    <option value="">horaire</option>
                                    <option value="7H">7H-9H55</option>
                                    <option value="10H05">10H05-12H55</option>
                                    <option value="13H05">13H05-15H55</option>
                                    <option value="16H05">16H05-18H55</option>
                                    <option value="19H05">19H05-21H55</option>
                                </select>
                                <select wire:model="salle7" name="salle7" id="salle7"class="form-control bg-soft-light border-light @error('salle7') is-invalid @enderror"  required >
                                    <option value="">salle/capacité</option>
                                    @if(!empty($salles7))
                                        @foreach($salles7 as $salle)
                                            <option value="{{ $salle->id }}">{{ $salle->nom_salle }}: {{ $salle->capacite }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                                <select wire:model="enseignant7" name="enseignant7" id="enseignant7"class="form-control bg-soft-light border-light @error('enseignant7') is-invalid @enderror"   required >
                                    <option value="">enseignant</option>
                                    @if(!empty($enseignants7))
                                        @foreach($enseignants7 as $enseignant)
                                            <option value="{{ $enseignant->id }}">{{ $enseignant->nom_ens }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                            
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endif
                    @if($nbre_ue8!=0 and !empty($salle7)  and !empty($jour7) and !empty($horaire7) and !empty($enseignant7))
                    <div class="form-group">
                        <label>{{ __("8") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere8" name="matiere8" id="matiere8"class="form-control bg-soft-light border-light @error('matiere8') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues8 as $ue)
                                    <option value="{{ $ue->id }}">{{ $ue->code_ue }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="jour8" name="jour8" id="jour8"class="form-control bg-soft-light border-light @error('jour8') is-invalid @enderror"  required >
                                    <option value="">jour</option>
                                    <option value="lundi">lundi</option>
                                    <option value="mardi">mardi</option>
                                    <option value="mercredi">mercredi</option>
                                    <option value="jeudi">jeudi</option>
                                    <option value="vendredi">vendredi</option>
                                    <option value="samedi">samedi</option>
                                    <option value="dimanche">dimanche</option>
                                </select>
                                <select wire:model="horaire8" name="horaire8" id="horaire8"class="form-control bg-soft-light border-light @error('horaire8') is-invalid @enderror"  required >
                                    <option value="">horaire</option>
                                    <option value="7H">7H-9H55</option>
                                    <option value="10H05">10H05-12H55</option>
                                    <option value="13H05">13H05-15H55</option>
                                    <option value="16H05">16H05-18H55</option>
                                    <option value="19H05">19H05-21H55</option>
                                </select>
                                <select wire:model="salle8" name="salle8" id="salle8"class="form-control bg-soft-light border-light @error('salle8') is-invalid @enderror"  required >
                                    <option value="">salle/capacité</option>
                                    @if(!empty($salles8))
                                        @foreach($salles8 as $salle)
                                            <option value="{{ $salle->id }}">{{ $salle->nom_salle }}: {{ $salle->capacite }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                                <select wire:model="enseignant8" name="enseignant8" id="enseignant8"class="form-control bg-soft-light border-light @error('enseignant8') is-invalid @enderror"   required >
                                    <option value="">enseignant</option>
                                    @if(!empty($enseignants8))
                                        @foreach($enseignants8 as $enseignant)
                                            <option value="{{ $enseignant->id }}">{{ $enseignant->nom_ens }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                            
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endif
                    @if($nbre_ue9!=0 and !empty($salle8)  and !empty($jour8) and !empty($horaire8) and !empty($enseignant8))
                    <div class="form-group">
                        <label>{{ __("9") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere9" name="matiere9" id="matiere9"class="form-control bg-soft-light border-light @error('matiere9') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues9 as $ue)
                                    <option value="{{ $ue->id }}">{{ $ue->code_ue }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="jour9" name="jour9" id="jour9"class="form-control bg-soft-light border-light @error('jour9') is-invalid @enderror"  required >
                                    <option value="">jour</option>
                                    <option value="lundi">lundi</option>
                                    <option value="mardi">mardi</option>
                                    <option value="mercredi">mercredi</option>
                                    <option value="jeudi">jeudi</option>
                                    <option value="vendredi">vendredi</option>
                                    <option value="samedi">samedi</option>
                                    <option value="dimanche">dimanche</option>
                                </select>
                                <select wire:model="horaire9" name="horaire9" id="horaire9"class="form-control bg-soft-light border-light @error('horaire9') is-invalid @enderror"  required >
                                    <option value="">horaire</option>
                                    <option value="7H">7H-9H55</option>
                                    <option value="10H05">10H05-12H55</option>
                                    <option value="13H05">13H05-15H55</option>
                                    <option value="16H05">16H05-18H55</option>
                                    <option value="19H05">19H05-21H55</option>
                                </select>
                                <select wire:model="salle9" name="salle9" id="salle9"class="form-control bg-soft-light border-light @error('salle9') is-invalid @enderror"  required >
                                    <option value="">salle/capacité</option>
                                    @if(!empty($salles9))
                                        @foreach($salles9 as $salle)
                                            <option value="{{ $salle->id }}">{{ $salle->nom_salle }}: {{ $salle->capacite }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                                <select wire:model="enseignant9" name="enseignant9" id="enseignant"class="form-control bg-soft-light border-light @error('enseignant9') is-invalid @enderror"   required >
                                    <option value="">enseignant</option>
                                    @if(!empty($enseignants9))
                                        @foreach($enseignants8 as $enseignant)
                                            <option value="{{ $enseignant->id }}">{{ $enseignant->nom_ens }}</option>
                                        @endforeach
                                    @else
                                        <option value = "">changer le jour ou l'heure</option>
                                    @endif
                                </select>
                            
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endif
                    <div>
                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __("Créer emploi de temps") }}</button>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</div>
