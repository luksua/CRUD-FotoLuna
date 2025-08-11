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
    <nav class="navbar navbar-border navbar-expand-lg fixed-top navbar-custom" style="background-color: white;">
        <!-- Eslogan de fotoluna -->
    <div class="eslogan-border bg-custom-3">La fotografía recuerda lo que la mente olvida</div>

    <div class="d-flex align-items-center">
        <a class="navbar-brand d-flex align-items-center gap-2" href="#">
            <img src="{{ asset('image/logo.jpg') }}" class="logo-img" alt="Logo" />
            <div class="fw-bold bg-custom-6 logo-text">
            <h1> FotoLuna </h1>
            </div>
        </a>
        </div>

        <!-- Menú hamburguesa -->
        <div class="menu">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span></span>
            <span></span>
            <span></span>
            </button>
        </div>

        <!-- Contenido colapsable alineado a la derecha -->
        <div class="collapse navbar-collapse justify-content-end pe-3 " id="navbarContent">
            <ul class="navbar-nav mobile-menu bg-custom-2 mb-2 mb-lg-0 d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio.html">Inicio</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="servicios.html">Usuarios</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="contacto.html">Contacto</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link portafolio-btn dropdown-toggle d-flex align-items-center justify-content-between" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Portafolio
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="maternidad.html">Maternidad</a></li>
                    <li><a class="dropdown-item" href="cumpleaños.html">Cumpleaños</a></li>
                    <li><a class="dropdown-item" href="quinceaños.html">Quince años</a></li>
                    <li><a class="dropdown-item" href="bodas.html">Bodas</a></li>
                    <li><a class="dropdown-item" href="bautizo.html">Bautizos</a></li>
                    <li><a class="dropdown-item" href="familia.html">Familia</a></li>
                    <li><a class="dropdown-item" href="grados.html">Grados</a></li>
                    <li><a class="dropdown-item" href="otros.html">Otros</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobremi.html">Sobre Mí</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

        <!-- Inicio de Sesión -->
    @yield('content')
    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const btn = document.getElementById("iniciarSesionBtn");
            const form = document.getElementById("formRegistro");
            
            btn.addEventListener("click", function (event) {
                event.preventDefault(); // Evita que el formulario se envíe
                
                // Limpiar los campos
                form.reset();

                window.location.href = "inicio2.html";
            });
        });
    </script> -->
</body>
</html>