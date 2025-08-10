<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento</title>
</head>

<body>
    <form action="{{ url('/event/'. $evento->idEvento) }}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        @include('event.form', ['modo' => 'Actualizar'])
    </form>



</body>

</html>