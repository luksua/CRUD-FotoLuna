</html>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'FotoLuna')</title>

    <!-- Bootstrap y estilos -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stylespa.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stylesfon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stylesnav.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stylesfooter.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styleiniciio.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style_comentarios.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stylesnavbar2.css') }}" />
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>

<body>
    @include('partials.navbar')

    <main class="@yield('main-class', 'container py-4')">
        @yield('content')
    </main>

    @if(empty($noFooter))
        @include('partials.footer')
    @endif
</body>

</html>