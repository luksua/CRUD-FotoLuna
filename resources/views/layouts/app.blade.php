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
    </style>
</head>

<body>
    @include('partials.navbar')

    <main class="container py-4">
        @yield('content')
    </main>


    <!--DE AQUI PA ABAJO FOOTER-->

    <!--Línea entre el relleno y el carrusel-->
    <hr class="my-4 border-dark border-2">

    <!-- Carrusel(? -->
    <div id="multiCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" active data-bs-interval="1500">
                <div class="d-flex justify-content-center gap-2">
                    <img src="image/piedepag1.png" class="img-fluid w-100" style="width: 800px;">
                    <img src="image/piedepag2.png" class="img-fluid w-100" style="width: 800px;">
                    <img src="image/piedepag3.png" class="img-fluid w-100" style="width: 800px;">
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="1500">
                <div class="d-flex justify-content-center gap-2">
                    <img src="image/piedepag4.png" class="img-fluid w-100" style="width: 800px;">
                    <img src="image/piedepag5.png" class="img-fluid w-100" style="width: 800px;">
                    <img src="image/piedepag6.png" class="img-fluid w-100" style="width: 800px;">
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="1500">
                <div class="d-flex justify-content-center gap-2">
                    <img src="image/piedepag7.png" class="img-fluid w-100" style="width: 800px;">
                    <img src="image/piedepag8.png" class="img-fluid w-100" style="width: 800px;">
                    <img src="../../image/piedepag9.png" class="img-fluid w-100" style="width: 800px;">
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="1500">
                <div class="d-flex justify-content-center gap-2">
                    <img src="image/piedepag10.png" class="img-fluid w-100" style="width: 800px;">
                    <img src="image/piedepag11.png" class="img-fluid w-100" style="width: 800px;">
                    <img src="image/piedepag12.png" class="img-fluid w-100" style="width: 800px;">
                </div>
            </div>
        </div>

        <div class="carousel-caption d-flex justify-content-center align-items-center h-100">
            <h5><a href="https://www.facebook.com" target="_blank" class="text-white text-decoration-hover">FACEBOOK</a>
            </h5>
        </div>
    </div>

    <!-- Botón WhatsApp -->
    <a href="https://wa.me/3142756935" target="_blank" class="whatsapp-btn">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Botón volver arriba (con JS) -->
    <button class="btn btn-secondary scroll-top" id="scrollTopBtn">
        <i class="bi bi-arrow-up"></i>
    </button>

    <!--Línea entre carrusel y footer-->
    <hr class="my-4 border-dark border-2">

    <!-- Footer -->
    <footer class="text-center">
        <div class="container-fluid">
            <div class="mb-3">
                <a href="https://www.facebook.com/?locale=es_LA" target="_blank" class="text-dark me-3"><i
                        class="bi bi-facebook fs-3"></i></a>
                <a href="https://www.instagram.com/" target="_blank" class="text-dark me-3"><i
                        class="bi bi-instagram fs-3"></i></a>
                <a href="https://x.com/?lang=es" target="_blank" class="text-dark"><i
                        class="bi bi-twitter-x fs-3"></i></a>
            </div>
            <p class="mb-0 text-start">&copy; FotoLuna </p>

        </div>
    </footer>


    <script>
        // Mostrar botón de scroll al llegar al final
        window.addEventListener('scroll', () => {
            const btn = document.getElementById('scrollTopBtn');
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                btn.style.display = 'block';
            } else {
                btn.style.display = 'none';
            }
        });

        // Scroll suave hacia arriba
        document.getElementById('scrollTopBtn').addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>