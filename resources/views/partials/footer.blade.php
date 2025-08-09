<!--DE AQUI PA ABAJO FOOTER-->
<footer class="text-center">
    <!--Línea entre el relleno y el carrusel-->
    <hr class="my-4 border-dark border-2">

    <!-- Carrusel(? -->
    <div id="multiCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" active data-bs-interval="1500">
                <div class="d-flex justify-content-center gap-2">
                    <img src="{{ asset('image/piedepag1.png') }}" class="img-fluid w-100" style="width: 800px;">
                    <img src="{{ asset('image/piedepag2.png') }}" class="img-fluid w-100" style="width: 800px;">
                    <img src="{{ asset('image/piedepag3.png') }}" class="img-fluid w-100" style="width: 800px;">
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="1500">
                <div class="d-flex justify-content-center gap-2">
                    <img src="{{ asset('image/piedepag4.png') }}" class="img-fluid w-100" style="width: 800px;">
                    <img src="{{ asset('image/piedepag5.png') }}" class="img-fluid w-100" style="width: 800px;">
                    <img src="{{ asset('image/piedepag6.png') }}" class="img-fluid w-100" style="width: 800px;">
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="1500">
                <div class="d-flex justify-content-center gap-2">
                    <img src="{{ asset('image/piedepag7.png') }}" class="img-fluid w-100" style="width: 800px;">
                    <img src="{{ asset('image/piedepag8.png') }}" class="img-fluid w-100" style="width: 800px;">
                    <img src="{{ asset('image/piedepag9.png') }}" class="img-fluid w-100" style="width: 800px;">
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="1500">
                <div class="d-flex justify-content-center gap-2">
                    <img src="{{ asset('image/piedepag10.png') }}" class="img-fluid w-100" style="width: 800px;">
                    <img src="{{ asset('image/piedepag11.png') }}" class="img-fluid w-100" style="width: 800px;">
                    <img src="{{ asset('image/piedepag12.png') }}" class="img-fluid w-100" style="width: 800px;">
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

    <div class="container-fluid">
        <div class="mb-3">
            <a href="https://www.facebook.com/?locale=es_LA" target="_blank" class="text-dark me-3"><i
                    class="bi bi-facebook fs-3"></i></a>
            <a href="https://www.instagram.com/" target="_blank" class="text-dark me-3"><i
                    class="bi bi-instagram fs-3"></i></a>
            <a href="https://x.com/?lang=es" target="_blank" class="text-dark"><i class="bi bi-twitter-x fs-3"></i></a>
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