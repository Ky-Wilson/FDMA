@extends('layouts.auth')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('Welcome Back!') }}</h1>
                                </div>
                                {{-- Début du formulaire de connexion Laravel --}}
                                <form method="POST" action="{{ route('login') }}" class="user">
                                    @csrf

                                    {{-- Champ Email --}}
                                    <div class="form-group">
                                        <input id="email" type="email"
                                               class="form-control form-control-user @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                               placeholder="{{ __('Email Address') }}"> {{-- Ajout du placeholder --}}

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- Champ Mot de passe --}}
                                    <div class="form-group">
                                        <input id="password" type="password"
                                               class="form-control form-control-user @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password"
                                               placeholder="{{ __('Password') }}"> {{-- Ajout du placeholder --}}

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    

                                    {{-- Bouton de soumission --}}
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Login') }}
                                    </button>

                                </form>
                                {{-- Fin du formulaire de connexion Laravel --}}

                                <hr>
                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                        <a class="small" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}"> {{-- Assurez-vous d'avoir une route 'register' --}}
                                        {{ __('Create an Account!') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
