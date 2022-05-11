<x-guest-layout>
    <x-jet-authentication-card>
        {{-- <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot> --}}

        {{-- <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form> --}}
        <div class="account-pages mb-5 pt-sm-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center mb-4">
                            <a href="{{url('/')}}" class="auth-logo mb-5 d-block">
                                <img src="{{ URL::asset('assets/images/logo-dark.png')}}" alt="" height="30" class="logo logo-dark">
                                <img src="{{ URL::asset('/assets/images/logo-light.png')}}" alt="" height="30" class="logo logo-light">
                            </a>
                            <h4>{{ __("S'enrgistrer") }}</h4>
                            <p class="text-muted mb-4">{{ __("Crés ton compte.") }}</p>
                            
                        </div>
        
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-3">
                                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                        @csrf
        
                                        <div class="form-group">
                                            <label>{{ __("Email") }}</label>
                                            <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text border-light text-muted">
                                                        <i class="ri-mail-line"></i>
                                                    </span>
                                                </div>
                                                <input id="email" type="text" class="form-control bg-soft-light border-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __("Enter Email") }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
        
                                        {{-- <div class="form-group">
                                            <label>{{ __("Contact No.") }}</label>
                                            <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text border-light text-muted">
                                                        <i class="ri-user-2-line"></i>
                                                    </span>
                                                </div>
                                                <input id="phone" type="text" class="form-control bg-soft-light border-light @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="{{ __("Enter Contact No.") }}">
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div> --}}
        
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
        
                                        {{-- <div class="form-group mb-4">
                                            <label for="avatar">{{ __("Profile Picture") }}</label>
                                            <input type="file" class="form-control bg-soft-light border-light @error('avatar') is-invalid @enderror" name="avatar" required id="avatar">
                                            @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div> --}}
                                        
                                        {{-- <div class="form-group">
                                            <label>{{ __("Location") }}</label>
                                            <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text border-light text-muted">
                                                        <i class="ri-user-2-line"></i>
                                                    </span>
                                                </div>
                                                <textarea id="location" type="text" class="form-control bg-soft-light border-light @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location" autofocus></textarea>
                                                @error('location')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> --}}
        
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
        
                        <div class="mt-5 text-center">
                            <p>{{ __("Avez-vous déjà un compte ?") }} <a href="{{url('login')}}" class="font-weight-medium text-primary"> {{ __("Se connecter") }} </a> </p>
                            <p>{{ __("© 2022 Adams. Réaliser") }} <i class="mdi mdi-heart text-danger"></i> {{ __("par Adams") }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
