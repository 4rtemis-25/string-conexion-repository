@extends('layouts.plantillaLogin')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row mb-3">

            <div class="col-md-12">
                <input id="email" type="email" placeholder="Correo Soy-sena" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">

            <div class="col-md-12">
                <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Recordar') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-12">
                <center>
                    <button type="submit" class="btn btn-primary">
                        {{ __('¡Ingresar Ahora!') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link text-primary" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu Contraseña?') }}
                        </a>
                    @endif
                </center>
            </div>
        </div>
    </form>
@endsection
