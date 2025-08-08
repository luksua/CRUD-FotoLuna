@extends('layouts.app')

@section('title', 'FotoLuna')

@section('content')
<!-- Inicio -->
    <div class="container-fluid my-5">
        <div class="slider-container">
            <div class="slider-track" id="sliderTrack">
                <div class="slider-item"><img src="image/boda.jpg" alt="1"></div>
                <div class="slider-item"><img src="image/cumple.jpg" alt="2"></div>
                <div class="slider-item"><img src="image/quince.jpg" alt="3"></div>
                <div class="slider-item"><img src="image/bautizo.jpg" alt="4"></div>
                <div class="slider-item"><img src="image/primerac.jpg" alt="5"></div>
                <div class="slider-item"><img src="image/folclor.jpg" alt="6"></div>
            </div>
            <div class="slider-buttons">
                <button id="prevBtn" class="btn btn-dark btn-lg rounded-circle">
                    <i class="bi bi-caret-left-fill"></i> <!-- Icono de flecha izquierda -->
                </button>
                <button id="nextBtn" class="btn btn-dark btn-lg rounded-circle">
                    <i class="bi bi-caret-right-fill"></i> <!-- Icono de flecha derecha -->
                </button>
            </div>
        </div>
    </div>
    <script>
        const track = document.getElementById('sliderTrack');
        const items = document.querySelectorAll('.slider-item');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        
        const totalItems = 6;
        const visibleItems = 3;
        let currentIndex = 0;
        
        const updateSlider = () => {
            const percent = (100 / visibleItems) * currentIndex;
            track.style.transform = `translateX(-${percent}%)`;

            // Quitar clases anteriores
            items.forEach(item => item.classList.remove('small', 'large'));

            // Asignar clases nuevas
            const visible = [currentIndex, currentIndex + 1, currentIndex + 2];
            visible.forEach((i, idx) => {
                if (items[i]) {
                    items[i].classList.add(idx === 1 ? 'large' : 'small'); // el del medio grande
                }
            });
        };
        
        nextBtn.addEventListener('click', () => {
            if (currentIndex < totalItems - visibleItems) {
                currentIndex++;
                updateSlider();
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });

        // Inicializar estado
        updateSlider();
    </script>

<br>
<br>
    <!-- Comentarios -->
    <div style="background-color: #fafafa">
        <div class="container my-5 py-5" >
            <h2 class="text-center mb-4">Comentarios</h2>
        
            <div class="comentario-box">
        
                <textarea class="form-control mb-3" rows="3" placeholder="Escriba aquí un comentario..."></textarea>
        
                <div class="row align-items-center mb-3">
                <div class="col-md-4">
                    <label class="form-label text-muted small">Sube una foto (opcional)</label>
                    <input class="form-control" type="file">
                </div>
                <div class="col-md-4 text-center">
                    <div class="mb-2 fw-semibold">¡Puntúanos!</div>
                    <div id="rating">
                    <i class="bi bi-camera-fill icono-camara" data-value="1"></i>
                    <i class="bi bi-camera-fill icono-camara" data-value="2"></i>
                    <i class="bi bi-camera-fill icono-camara" data-value="3"></i>
                    <i class="bi bi-camera-fill icono-camara" data-value="4"></i>
                    <i class="bi bi-camera-fill icono-camara" data-value="5"></i>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 text-start">
                    <label class="form-check-label me-2">Anónimo</label>
                    <div class="form-check form-switch d-inline">
                        <input class="form-check-input" type="checkbox" id="anonimoSwitch">
                    </div>
        
                </div>
                </div>
        
                <button class="btn btn-enviar w-100">Enviar comentario</button>
        
            </div>
        
            <hr class="my-5">
        
            <div class="comentarios-scroll">
                <div class="comentario-card">
                <div class="mb-1">
                    <i class="bi bi-person-circle me-2"></i>
                    <strong>Fulanito</strong>
                </div>
                <div class="mb-2">
                    <i class="bi bi-camera-fill"></i><i class="bi bi-camera-fill"></i><i class="bi bi-camera-fill"></i><i class="bi bi-camera-fill"></i><i class="bi bi-camera"></i>
                </div>
                <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
        
        
                <div class="comentario-card">
                <div class="mb-1">
                    <i class="bi bi-person-circle me-2"></i>
                    <strong>Fulanita</strong>
                </div>
                <div class="mb-2">
                    <i class="bi bi-camera-fill"></i><i class="bi bi-camera-fill"></i><i class="bi bi-camera-fill"></i><i class="bi bi-camera"></i><i class="bi bi-camera"></i>
                </div>
                <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
        
        
                <div class="comentario-card">
                <div class="mb-1">
                    <i class="bi bi-person-circle me-2"></i>
                    <strong>Matt Bellamy</strong>
                </div>
                <div class="mb-2">
                    <i class="bi bi-camera-fill"></i><i class="bi bi-camera-fill"></i><i class="bi bi-camera-fill"></i><i class="bi bi-camera-fill"></i><i class="bi bi-camera-fill"></i>
                </div>
                <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
                
        
                <div class="comentario-card">
                    <div class="mb-1">
                        <i class="bi bi-person-circle me-2"></i>
                        <strong>Kurt Cobain</strong>
                    </div>
                    <div class="mb-2">
                        <i class="bi bi-camera-fill"></i><i class="bi bi-camera-fill"></i><i class="bi bi-camera"></i><i class="bi bi-camera"></i><i class="bi bi-camera"></i>
                    </div>
                    <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
        
        
                <div class="comentario-card">
                    <div class="mb-1">
                        <i class="bi bi-person-circle me-2"></i>
                        <strong>yo</strong>
                    </div>
                    <div class="mb-2">
                        <i class="bi bi-camera-fill"></i><i class="bi bi-camera-fill"></i><i class="bi bi-camera-fill"></i><i class="bi bi-camera-fill"></i><i class="bi bi-camera"></i>
                    </div>
                    <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
        
        
                <div class="comentario-card">
                    <div class="mb-1">
                        <i class="bi bi-person-circle me-2"></i>
                        <strong>joan</strong>
                    </div>
                    <div class="mb-2">
                        <i class="bi bi-camera-fill"></i><i class="bi bi-camera"></i><i class="bi bi-camera"></i><i class="bi bi-camera"></i><i class="bi bi-camera"></i>
                    </div>
                    <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>   
        
        
            <!--Script pa la puntuación con cámaras--> 
            <script>
            const cameras = document.querySelectorAll('#rating .icono-camara');
            cameras.forEach((icon, index) => {
                icon.addEventListener('click', () => {
                cameras.forEach((el, i) => {
                    el.classList.toggle('active', i <= index);
                });
                });
            });
            </script>
        
        
@endsection