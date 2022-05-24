<div>
<div class="card">
        <div class="card-body p-4">
            <div class="p-3">
                <form method="POST" action="{{ route('planifier') }}" enctype="multipart/form-data">
                    {{ $filiere }} {{ $specialites }} {{ $niveau }} {{ $effectif }}
                    <input type="hidden" name="filiere" value="{{ $filiere }}">
                    @csrf
                    <div class="form-group">
                        <label>{{ __("Niveau") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere1" name="matiere1" id="matiere1"class="form-control bg-soft-light border-light @error('matiere1') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues as $ue)
                                    <option value="{{ $ue->nom_ue }}">{{ $ue->nom_ue }}</option>
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
                                    @foreach($salles1 as $salle)
                                        <option value="{{ $salle->nom_salle }}">{{ $salle->nom_salle }}: {{ $salle->capacite }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="enseignant1" name="enseignant1" id="enseignant1"class="form-control bg-soft-light border-light @error('enseignant1') is-invalid @enderror"   required >
                                    <option value="">enseignant</option>
                                    @foreach($enseignants1 as $enseignant)
                                        <option value="{{ $enseignant->nom_ens }}">{{ $enseignant->nom_ens }}</option>
                                    @endforeach
                                </select>
                            
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @if(!empty($mesues2))
                    <div class="form-group">
                        <label>{{ __("Niveau") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere2" name="matiere2" id="matiere2"class="form-control bg-soft-light border-light @error('matiere2') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues2 as $ue)
                                    <option value="{{ $ue->nom_ue }}">{{ $ue->nom_ue }}</option>
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
                                    @foreach($salles2 as $salle)
                                        <option value="{{ $salle->nom_salle }}">{{ $salle->nom_salle }}: {{ $salle->capacite }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="enseignant2" name="enseignant2" id="enseignant2"class="form-control bg-soft-light border-light @error('enseignant2') is-invalid @enderror"   required >
                                    <option value="">enseignant</option>
                                    @foreach($enseignants2 as $enseignant)
                                        <option value="{{ $enseignant->nom_ens }}">{{ $enseignant->nom_ens }}</option>
                                    @endforeach
                                </select>
                            
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endif
                    @if(!empty($mesues3))
                    <div class="form-group">
                        <label>{{ __("Niveau") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere3" name="matiere3" id="matiere3"class="form-control bg-soft-light border-light @error('matiere3') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues3 as $ue)
                                    <option value="{{ $ue->nom_ue }}">{{ $ue->nom_ue }}</option>
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
                                    @foreach($salles3 as $salle)
                                        <option value="{{ $salle->nom_salle }}">{{ $salle->nom_salle }}: {{ $salle->capacite }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="enseignant3" name="enseignant3" id="enseignant3"class="form-control bg-soft-light border-light @error('enseignant3') is-invalid @enderror"   required >
                                    <option value="">enseignant</option>
                                    @foreach($enseignants3 as $enseignant)
                                        <option value="{{ $enseignant->nom_ens }}">{{ $enseignant->nom_ens }}</option>
                                    @endforeach
                                </select>
                            
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endif
                    @if(!empty($mesues4))
                    <div class="form-group">
                        <label>{{ __("Niveau") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere4" name="matiere4" id="matiere4"class="form-control bg-soft-light border-light @error('matiere4') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues4 as $ue)
                                    <option value="{{ $ue->nom_ue }}">{{ $ue->nom_ue }}</option>
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
                                    @foreach($salles4 as $salle)
                                        <option value="{{ $salle->nom_salle }}">{{ $salle->nom_salle }}: {{ $salle->capacite }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="enseignant4" name="enseignant4" id="enseignant4"class="form-control bg-soft-light border-light @error('enseignant4') is-invalid @enderror"   required >
                                    <option value="">enseignant</option>
                                    @foreach($enseignants4 as $enseignant)
                                        <option value="{{ $enseignant->nom_ens }}">{{ $enseignant->nom_ens }}</option>
                                    @endforeach
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
