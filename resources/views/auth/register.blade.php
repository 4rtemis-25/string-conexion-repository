@extends('layouts.plantillaRegistro')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row mb-3">
            <div class="col-md-12">
                <input id="name" type="text" placeholder="Nombre Completo" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <input id="email" type="email" placeholder="Correo Soy-Sena" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <input id="password-confirm" type="password" placeholder="Confirmar Contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-12">
                <center>
                    <div class="form-check form-check-info text-start">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                            Acepto <a href="javascript:;" class="text-dark font-weight-bolder">términos y condiciones</a>
                        </label>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary">
                        {{ __('¡Registrarse Ahora!') }}
                    </button>

                    <p class="text-sm mt-3 mb-0">¿Ya formas parte de String-Conexion? 
                        <br>
                        <a href="{{ route('login') }}" class="text-dark font-weight-bolder">Inicia Sesión</a>
                    </p>
                </center>
            </div>
        </div>
    </form>
@endsection
