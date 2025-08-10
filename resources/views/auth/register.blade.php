@extends('layouts.auth')

@section('content')

    <div class="form-section">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 bg-custom-2">
                Registro
            </div>
        </div>
        <div class="row bg-custom-9">
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-center">
                <img src="{{ asset('image/imagenperfil.jpg') }}" alt="Foto Perfil" id="profilePreview"
                    class="profile-img mb-3">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <form id="formRegistro" method="POST" action="{{ route('customer.register') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3 align-items-center">
                        <div class="col-12 col-md-4 texto2">
                            <label for="nombreCliente" class="col-form-label">Nombres:</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <input type="text" class="form-control @error('nombreCliente') is-invalid @enderror" id="nombreCliente"
                                name="nombreCliente" value="{{ old('nombreCliente') }}" required>
                            @error('nombreCliente')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-12 col-md-4 texto2">
                            <label for="apellidoCliente" class="col-form-label">Apellidos:</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <input type="text" class="form-control @error('apellidoCliente') is-invalid @enderror" id="apellidoCliente"
                                name="apellidoCliente" value="{{ old('apellidoCliente') }}" required>
                            @error('apellidoCliente')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-12 col-md-4 texto2">
                            <label for="telefonoCliente" class="col-form-label">Teléfono:</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <input type="text" class="form-control @error('telefonoCliente') is-invalid @enderror" id="telefonoCliente"
                                name="telefonoCliente" value="{{ old('telefonoCliente') }}" required>
                            @error('telefonoCliente')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-12 col-md-4 texto2">
                            <label for="tipoDocumento" class="col-form-label">Tipo de Documento:</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <select class="form-select @error('tipoDocCliente') is-invalid @enderror" id="tipoDocumento"
                                name="tipoDocCliente" required>
                                <option value="">...</option>
                                <option value="CC" {{ old('tipoDocumento') == 1 ? 'selected' : '' }}>Cédula</option>
                                <option value="CE" {{ old('tipoDocumento') == 2 ? 'selected' : '' }}>Cédula de Extranjería
                                </option>
                                <option value="PAS" {{ old('tipoDocumento') == 3 ? 'selected' : '' }}>Pasaporte</option>
                            </select>
                            @error('tipoDocCliente')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-12 col-md-4 texto2">
                            <label for="documento" class="col-form-label">Número de Documento:</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <input type="text" class="form-control @error('numeroDocCliente') is-invalid @enderror" id="documento"
                                name="numeroDocCliente" value="{{ old('numeroDocCliente') }}" required>
                            @error('numeroDocCliente')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-12 col-md-4 texto2">
                            <label for="correo" class="col-form-label">Correo:</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <input type="email" class="form-control @error('correoCliente') is-invalid @enderror" id="correo"
                                name="correoCliente" value="{{ old('correoCliente') }}" required>
                            @error('correoCliente')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-12 col-md-4 texto2">
                            <label for="password" class="col-form-label">Contraseña:</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-1 align-items-center">
                        <div class="col-12 col-md-4 texto2">
                            <label for="password_confirmation" class="col-form-label">Confirmar Contraseña:</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                    </div>
                    <div id="emailHelp" class="form-text mb-4 text-end">La contraseña debe tener mínimo 8 caracteres</div>
                    <input type="file" id="profileImage" name="fotoCliente" required>
                    <div class="d-flex justify-content-center">
                        <input type="submit" class="btn custom-upload-btn" id="crearCuentaBtn" placeholder="Crear Cuenta">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
