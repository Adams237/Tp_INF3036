<div>
    <div class="card">
        <div class="card-body p-4">
            <div class="p-3">
                <form method="POST" action="{{ route('emploiDeTemps') }}" enctype="multipart/form-data">
                    {{ $filiere }}
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
                            <select wire:model="niveau" name="niveau" id="niveau"class="form-control bg-soft-light border-light @error('niveau') is-invalid @enderror" name="niveau"  required autocomplete="niveau">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            @error('niveau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @if ($niveau>=3)
                        <div class="form-group">
                            <label>{{ __("Specialite") }}</label>
                            <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text border-light text-muted">
                                        <i class="ri-mail-line"></i>
                                    </span>
                                </div>
                                
                                @if ( !empty($specialites) )
                                    <select wire:model="choixSpec" name="choixSpec" id="choixSpec" class="form-control bg-soft-light border-light @error('specialite') is-invalid @enderror"  required >
                                        {{-- <option selected>{{ $choixSpec }}</option> --}}
                                        @foreach ($specialites as $specialite )
                                            <option value="{{ $specialite->nomSpec }}">{{ $specialite->nomSpec }}</option>
                                        @endforeach
                                    </select> 
                                @endif
                                
                            </div>
                        </div>
                    @endif
                    
                    <div class="form-group">
                        <label>{{ __("Effectif") }} {{ $choixSpec }} {{ $niveau }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                                
                            <input id="effectif" type="text" class="form-control bg-soft-light border-light @error('effectif') is-invalid @enderror" name="effectif" value="@if (!empty($spec)) {{ $effectif }} @else {{ $effectif }} @endif" required autocomplete="effectif" >
                                {{-- @if (!empty($spec))
                                    {{ $spec[0]->effectifSpec }}  
                                @else --}}
                                    
                                {{-- @endif                               --}}
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __("Créer emploi de temps") }}</button>
                    </div>

                    <div class="mt-4 text-center">
                        <p class="text-muted mb-0">{{ __("By registering you agree to the Chatvia") }} <a href="#" class="text-primary">{{ __("Terms of Use") }}</a></p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
