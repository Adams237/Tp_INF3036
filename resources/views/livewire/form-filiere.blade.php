<div>
    <div class="card">
        <div class="card-body p-4">
            <div class="p-3">
                <form wire:submit.prevent="envoyer" enctype="multipart/form-data">
                    {{ $filiere }}
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
                                    <select wire:model="specialite" name="specialite" id="specialite"class="form-control bg-soft-light border-light @error('specialite') is-invalid @enderror" name="specialite" value="{{ old('specialite') }}" required autocomplete="specialite" placeholder="{{ __("specialite") }}">
                                        @foreach ($specialites as $specialite )
                                            <option value="{{ $specialite->nomSpec }}">{{ $specialite->nomSpec }}</option>
                                        @endforeach
                                    </select> 
                                @endif
                                
                            </div>
                        </div>
                    @endif
                    
                    <div class="form-group">
                        <label>{{ __("Effectif") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                                
                            <input id="effectif" type="text" class="form-control bg-soft-light border-light @error('effectif') is-invalid @enderror" name="effectif" value="@if (!empty($spec)) {{ $spec[0]->effectifSpec }} @endif" required autocomplete="effectif" >
                                {{-- @if (!empty($spec))
                                    {{ $spec[0]->effectifSpec }}  
                                @else --}}
                                    
                                {{-- @endif                               --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ __("Pseudo") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-user-2-line"></i>
                                </span>
                            </div>
                            <input id="name" type="text" class="form-control bg-soft-light border-light @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __("Enter Username") }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label>{{ __("Mot de passe") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-lock-2-line"></i>
                                </span>
                            </div>
                            <input id="password" type="password" class="form-control bg-soft-light border-light @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __("Enter Password") }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label>{{ __("Confirmation ") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-lock-2-line"></i>
                                </span>
                            </div>
                            <input id="password-confirm" type="password" class="form-control bg-soft-light border-light" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __("Enter Confirm Password") }}">
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __("Enregistrer") }}</button>
                    </div>

                    <div class="mt-4 text-center">
                        <p class="text-muted mb-0">{{ __("By registering you agree to the Chatvia") }} <a href="#" class="text-primary">{{ __("Terms of Use") }}</a></p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
