<x-guest-layout>
    <x-jet-authentication-card>
        {{-- <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot> --}}

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        {{-- <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form> --}}
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center mb-4">
                            <a href="{{url('/')}}" class="auth-logo mb-5 d-block">
                                <img src="{{ URL::asset('assets/images/logo-dark.png')}}" alt="" height="30" class="logo logo-dark">
                                <img src="{{ URL::asset('/assets/images/logo-light.png')}}" alt="" height="30" class="logo logo-light">
                            </a>
                            <h4>{{ __("Connexion") }}</h4>
                            <p class="text-muted mb-4">{{ __("Authentification requise") }}</p>
                        </div>
        
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-3">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <label>{{ __("Email") }}</label>
                                            <div class="input-group mb-3 bg-soft-light input-group-lg rounded-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text border-light text-muted">
                                                        <i class="ri-user-2-line"></i>
                                                    </span>
                                                </div>
                                                <input id="email" type="email" class="form-control bg-soft-light border-light @error('email') is-invalid @enderror" name="email" value="{{ old('email', 'admin@themesbrand.com') }}" required autocomplete="email" autofocus placeholder="{{ __("Enter Email") }}">
                                                @error('email')
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
                                                <input id="password" type="password" class="form-control bg-soft-light border-light @error('password') is-invalid @enderror" name="password" value="password" required autocomplete="current-password" placeholder="{{ __("Enter Password") }}">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="custom-control custom-checkbox mb-4">
                                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                        </div>
        
                                        <div>
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __("Sign in") }}</button>
                                        </div>
                                        <tr>
                                            <div class="flex items-center justify-end mt-4">
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                        {{ __('Mot de passe oublié?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </tr>
                                    </form>
                                </div>
                            </div>
                        </div>
        
                        <div class="mt-5 text-center">
                            <p>{{ __("N'avez-vous pas de compte ?") }}<a href="{{url('register')}}" class="font-weight-medium text-primary"> {{ __("S'enregistrer") }} </a> </p>
                            <p>{{ __("© 2022 Adams. Réaliser") }}<i class="mdi mdi-heart text-danger"></i>{{ __("par Adams") }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
