<div>
<div class="card">
        <div class="card-body p-4">
            <div class="p-3">
                <form method="POST" action="{{ route('planifier') }}" enctype="multipart/form-data">
                    {{ $filiere }} {{ $specialites }} {{ $niveau }} {{ $effectif }}
                    <input type="hidden" name="filiere" value="{{ $filiere }}">
                    @csrf
                    @foreach($ues as $ue)
                    <div class="form-group">
                        <label>{{ __("Niveau") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            
                                <select wire:model="matiere" name="niv" id="niv"class="form-control bg-soft-light border-light @error('niv') is-invalid @enderror"  required >
                                    <option value="">ue</option> 
                                    @foreach($mesues as $ue)
                                    <option value="{{ $ue->nom_ue }}">{{ $ue->nom_ue }}</option>
                                    @endforeach
                                </select>
                                <select wire:model="niv" name="niv" id="niv"class="form-control bg-soft-light border-light @error('niv') is-invalid @enderror"  required >
                                    <option value="">enseignant</option> 
                                    <option value="1"></option>
                                    <option value="2"></option>
                                    <option value="3"></option>
                                    <option value="4"></option>
                                    <option value="5"></option>
                                </select>
                                <select wire:model="niv" name="niv" id="niv"class="form-control bg-soft-light border-light @error('niv') is-invalid @enderror"  required >
                                    <option value="">salle</option> 
                                    <option value="1"></option>
                                    <option value="2"></option>
                                    <option value="3"></option>
                                    <option value="4"></option>
                                    <option value="5"></option>
                                </select>
                                <select wire:model="niv" name="niv" id="niv"class="form-control bg-soft-light border-light @error('niv') is-invalid @enderror" name="niv"  required >
                                    <option value="">horaire</option> 
                                    <option value="1"></option>
                                    <option value="2"></option>
                                    <option value="3"></option>
                                    <option value="4"></option>
                                    <option value="5"></option>
                                </select>
                            
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endforeach
                    
                    
                    <div>
                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __("Créer emploi de temps") }}</button>
                    </div>

                    
                    
                </form>
            </div>
        </div>
    </div>
</div>
