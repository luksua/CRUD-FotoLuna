<div class="row mb-3 align-items-center">
    <div class="col-12 col-md-4 texto2">
        <label for="evento" class="col-form-label">Evento:</label>
    </div>
    <div class="col-12 col-md-8">
        <select name="idEventoFK" id="evento" class="form-select" required>
            <option value="">...</option>
            @foreach ($eventos as $evento)
                <option value="{{ $evento['idEvento'] }}" @if(isset($appointment) && $appointment->idEventoFK == $evento['idEvento']) selected @endif>
                    {{ $evento['tipoEvento'] }}
                </option>
            @endforeach
        </select>
    </div>
</div>

<div class="row mb-3 align-items-center">
    <div class="col-12 col-md-4 texto2">
        <label for="hora" class="col-form-label">Hora:</label>
    </div>
    <div class="col-12 col-md-8">
        <input type="time" class="form-control @error('hora') is-invalid @enderror" id="hora" name="horaCita"
            value="{{ isset($appointment->horaCita) ? $appointment->horaCita : old('hora') }}" required>
        @error('hora')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-1 align-items-center">
    <div class="col-12 col-md-4 texto2">
        <label for="fecha" class="col-form-label">Fecha:</label>
    </div>
    <div class="col-12 col-md-8 mb-3">
        <input type="date" class="form-control @error('fecha') is-invalid @enderror" id="fecha" name="fechaCita"
            value="{{ isset($appointment->fechaCita) ? $appointment->fechaCita : old('fechaCita') }}" required>
        @error('fecha')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-1 align-items-center">
    <div class="col-12 col-md-4 texto2">
        <label for="lugar" class="col-form-label">Lugar:</label>
    </div>
    <div class="col-12 col-md-8 mb-3">
        <input type="text" class="form-control" id="lugar" name="lugar"
            value="{{ isset($appointment->lugar) ? $appointment->lugar : old('lugar') }}" required>
    </div>
</div>

<div class="row mb-1 align-items-center">
    <div class="col-12 col-md-4 texto2">
        <label for="comentario" class="col-form-label">Comentario:</label>
    </div>
    <div class="col-12 col-md-8 mb-3">
        <input type="text" class="form-control" id="comentario" name="comentario"
            value="{{ isset($appointment->comentario) ? $appointment->comentario : old('comentario') }}">
    </div>
</div>

<div class="d-flex justify-content-center">
    <button type="submit" class="btn custom-upload-btn" id="enviar">Aceptar</button>
</div>