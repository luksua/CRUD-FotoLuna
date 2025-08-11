<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento</title>
</head>

<body>
    @extends('layouts.app')

    @section('title', 'Eventos')

    @php($noFooter = true)

    @section('main-class', 'container-fluid py-4')
    <div class="form-section">
        <div class="row bg-custom-9">
            <h2 class="mb-4 text-center bg-custom-2">Eventos</h2>
            <div class="col-lg-6 col-md-6 col-sm-12 py-5 ps-lg-5">
                <form action="{{ url('/event/' . $evento->idEvento) }}" method="post">
                    @csrf
                    {{ method_field('PATCH') }}
                    @include('event.form', ['modo' => 'Actualizar'])
                </form>
            </div>
            <div class="col-lg-6 col-md-6 d-none d-md-block">
                <img src="{{ asset('image/fotoi.jpg') }}" alt="Imagen de perfil" class="img-fluid rounded">
            </div>
        </div>
    </div>



</body>

</html>
