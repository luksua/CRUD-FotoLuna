<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado</title>
</head>

<body>
    <h1>Listado de los Eventos</h1>
    @if (Session::has('mensaje'))
        {{ Session::get('mensaje') }}

    @endif
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Tipo de Evento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($event as $datos)
                <tr>
                    <td>{{ $datos->idEvento}}</td>
                    <td>{{ $datos->tipoEvento}}</td>
                    <td>
                        <a href="{{ url('/event/' . $datos->idEvento . '/edit') }}"> Editar |</a>


                        <form action="{{ url('/event/' . $datos->idEvento) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" onclick="return confirm('¿Borrar?')" value="Borrar" class="btn btn-danger">
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/event/create') }}" class="btn btn-primary">Crear nuevo evento</a>
</body>

</html>