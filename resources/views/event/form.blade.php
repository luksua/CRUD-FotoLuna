<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento</title>
</head>

<body>
    <h1>{{ $modo }} Eventos</h1>
    <form action="{{ url('/event') }}" method="POST">
        @csrf
        <input type="text" name="tipoEvento" id="tipoEvento" class="form-control"
            value="{{ isset($evento->tipoEvento) ? $evento->tipoEvento : ''}}" required placeholder="Tipo de evento">
        <br>
        <div class="d-flex justify-content-center mb-2">
            <button type="submit" class="btn custom-upload-btn " value="{{ $modo }} Evento">Aceptar</button>
        </div>
        

        <div class="d-flex justify-content-center ">
            <a href="{{ url('/event') }}" class="btn custom-upload-btn">Cancelar</a>
        </div>

    </form>

</body>

</html>
