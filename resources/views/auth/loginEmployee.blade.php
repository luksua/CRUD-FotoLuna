@extends('layouts.auth')

@section('content')
    <div class="form-section">
        <div class="row bg-custom-9">
            <div class="col-lg-6 col-md-6 d-none d-md-block">
                <img src="{{ asset('image/fotoi.jpg') }}" alt="Imagen de perfil" class="img-fluid rounded">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-5 ps-lg-5">
                <h2 class="mb-4 text-center bg-custom-2">Inicio de Sesión</h2>
                <form method="POST" action="{{ route('employee.login') }}" id="formRegistro">
                    @csrf
                    <div class="row mb-3 align-items-center">
                        <div class="col-12 col-md-4 texto2">
                            <label for="email" class="col-form-label">Correo electrónico:</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-1 align-items-center">
                        <div class="col-12 col-md-4 texto2">
                            <label for="password" class="col-form-label">Contraseña:</label>
                        </div>
                        <div class="col-12 col-md-8 mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="form-text mb-4 text-end" href="{{ route('password.request') }}">Olvidé mi contraseña</a>
                    @endif
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn custom-upload-btn" id="iniciarSesionBtn">Iniciar Sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">{{ __('Login') }}</div>

                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="row mb-3">
                                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror" name="password" required
                                                        autocomplete="current-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6 offset-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Login') }}
                                                    </button>

                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> -->

@endsection