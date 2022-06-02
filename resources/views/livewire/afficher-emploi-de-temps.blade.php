<div>
    <div class="card">
        <div class="card-body p-4">
            <div class="p-3">
                <form method="POST" action="{{ route('afficheur') }}" enctype="multipart/form-data">
                    {{ $filiere }}
                    <input type="hidden" name="filiere" value="{{ $filiere }}">
                    <input type="hidden" name="id_filiere" value="{{ $idt }}">
                    @csrf
                    <div class="form-group">
                        <label>{{ __("Niveau") }}</label>
                        <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-light text-muted">
                                    <i class="ri-mail-line"></i>
                                </span>
                            </div>
                            <select wire:model="niveau" name="niveau" id="niveau"class="form-control bg-soft-light border-light @error('niveau') is-invalid @enderror" name="niveau"  autocomplete="niveau">
                                <option value=""></option> 
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
                    
                    
                    @if(empty($niveau))
                        <div>
                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __("afficher emploi de temps de ") }} {{ $filiere }}</button>
                        </div>
                    @else
                        <div>
                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __("afficher emploi de temps de ") }} {{ $niveau }}</button>
                        </div>    
                    @endif
                    
                </form>
            </div>
        </div>
    </div>
</div>

