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
        <h2>Evento</h2>
        <input type="text" name="tipoEvento" id="tipoEvento" class="form-control" value="{{ isset($evento->tipoEvento) ? $evento->tipoEvento : ''}}" required placeholder="Tipo de evento">

        <input type="submit" class="btn btn-success" value="{{ $modo }} Evento">
        <a href="{{ url('/event') }}" class="btn btn-secondary">Cancelar</a>

    </form>

</body>

</html>