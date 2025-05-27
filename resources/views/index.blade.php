@extends('layouts.app')
@section('title', 'index')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco-Creations</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    {{-- ipervinculo para iconos xde --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/index/index.css') }}">
</head>

<body>
    <section class="header_banner carousel">

        {{-- slider 1 --}}
        <div class="carousel-slide active">
            <img class="img_header" src="{{ asset('img/index/img1.png') }}" alt="Productos reciclables">
            <article class="texto_header">
                <h1 class="texth1">Transformamos<br>
                    Residuos
                    <br> <span class="h2_texto">en Futuro Recicla con ECOCREATIONS</span>
                </h1>
                <a href="#" class="btn_vermas">
                    VER MÁS
                    <i class="fas fa-arrow-right"></i>
                </a>
            </article>
        </div>

        {{-- slider 2 --}}
        <div class="carousel-slide">
            <img class="img_header" src="{{ asset('img/index/img_banner2.png') }}" alt="Slide 2">
            <article class="texto_header">
                <h1 class="texth1">Energía Verde<br>
                    <span class="h2_texto">Reinventando el mañana</span>
                </h1>
                <a href="#" class="btn_vermas">
                    VER MÁS
                    <i class="fas fa-arrow-right"></i>
                </a>
            </article>
        </div>

        {{-- slider 3 --}}
        <div class="carousel-slide">
            <img class="img_header" src="{{ asset('img/index/img_banner3.png') }}" alt="Slide 2">
            <article class="texto_header">
                <h1 class="texth1">Recicla y Cuida <br>
                    <span class="h2_texto">asi se vive mejor</span>
                </h1>
                <a href="#" class="btn_vermas">
                    VER MÁS
                    <i class="fas fa-arrow-right"></i>
                </a>
            </article>
        </div>

        {{-- slider 4 --}}
        <div class="carousel-slide">
            <img class="img_header" src="{{ asset('img/index/img_banner4.png') }}" alt="Slide 2">
            <article class="texto_header">
                <h1 class="texth1">El prensete hace el cambio<br>
                    <span class="h2_texto">Eco-Creations recicla con nosotros</span>
                </h1>
                <a href="#" class="btn_vermas">
                    VER MÁS
                    <i class="fas fa-arrow-right"></i>
                </a>
            </article>
        </div>
        <!-- Flechas -->
        <div class="carousel-arrow left" onclick="prevSlide()">←</div>
        <div class="carousel-arrow right" onclick="nextSlide()">→</div>
    </section>

    <!-- seccion 2 -->
    <section class="seccion_elegirnos">
        <h2>¿Por qué elegirnos?</h2>

        <div class="slider-container">

            <button class="slider-arrow left" onclick="prevGroup()">←</button>

            <div class="slider-track" id="sliderTrack">
                <!-- Tarjeta 1 -->
                <div class="slider-card">
                    <div class="card">
                        <div class="card-image">
                            <button class="btn-wenas" id="img_config">Ecológico y sostenible </button>

                            <div class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti
                                facere
                                totam veritatis laboriosam harum voluptatibus iure, repellat sapiente commodi? Deserunt
                                illum eos harum possimus, labore vel odio officiis iste magnam.
                                Cada producto está diseñado pensando en el planeta. Utilizamos materiales
                                reutilizables, reciclables
                            </div>
                            <img src="{{ asset('img/index/card_1.png') }}" alt="Imagen 1">
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="slider-card">
                    <div class="card">
                        <div class="card-image">
                            <button class="btn-wenas">Envíos a todo el país <br> Llevamos nuestros </button>
                            <div class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo quia
                                at
                                harum, commodi doloribus nobis consequatur aperiam dicta, odit eius facilis corporis
                                voluptates nihil fugiat, reprehenderit placeat officiis aspernatur! Similique.
                            </div>
                            <img src="{{ asset('img/index/card_2.png') }}" alt="Imagen 2">
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="slider-card">
                    <div class="card-image">
                        <button class="btn-wenas">Personalización a tu gusto</button>
                        <div class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo quia at
                            harum, commodi doloribus nobis consequatur aperiam dicta, odit eius facilis corporis
                            voluptates nihil fugiat, reprehenderit placeat officiis aspernatur! Similique. Creemos que
                            lo ecológico también puede ser único.

                        </div>
                        <img src="{{ asset('img/index/card_3.png') }}" alt="Imagen 3">
                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="slider-card">
                  <div class="card-image">
                        <button class="btn-wenas">Personalización a tu gusto</button>
                        <div class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo quia at
                            harum, commodi doloribus nobis consequatur aperiam dicta, odit eius facilis corporis
                            voluptates nihil fugiat, reprehenderit placeat officiis aspernatur! Similique. Creemos que
                            lo ecológico también puede ser único.

                        </div>
                        <img src="{{ asset('img/index/card_3.png') }}" alt="Imagen 3">
                    </div>
                </div>

                <!-- Tarjeta 5 -->
                <div class="slider-card">
                    <div class="card-image">
                        <button class="btn-wenas">Personalización a tu gusto</button>
                        <div class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo quia at
                            harum, commodi doloribus nobis consequatur aperiam dicta, odit eius facilis corporis
                            voluptates nihil fugiat, reprehenderit placeat officiis aspernatur! Similique. Creemos que
                            lo ecológico también puede ser único.

                        </div>
                        <img src="{{ asset('img/index/card_3.png') }}" alt="Imagen 3">
                    </div>
                </div>

                <!-- Tarjeta 6 -->
                <div class="slider-card">
                   <div class="card-image">
                        <button class="btn-wenas">Personalización a tu gusto</button>
                        <div class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo quia at
                            harum, commodi doloribus nobis consequatur aperiam dicta, odit eius facilis corporis
                            voluptates nihil fugiat, reprehenderit placeat officiis aspernatur! Similique. Creemos que
                            lo ecológico también puede ser único.

                        </div>
                        <img src="{{ asset('img/index/card_3.png') }}" alt="Imagen 3">
                    </div>
                </div>
            </div>
            <button class="slider-arrow right" onclick="nextGroup()">→</button>

        </div>

    </section>
    {{-- seccion 3  --}}
    <section class="seccion_nuestra_ecologia">
        <div class="title_seccion">
            <h1 class="text_title">NUESTRAS ECOLOGIAS - GALERIA</h1>
            <img class="img_title" src="{{ asset('img/index/seccion_3.png') }}" alt="">
        </div>


        <section class="parth_pri">

            <article class="sec3_primario">
                <img class="img_primario" src="{{ asset('img/index/sec3_img1.png') }}" alt="">

            </article>

            <article class="sec3_img_content">
                <article class="contendores_img">
                    <img class="img_grid" src="{{ asset('img/index/sec3_img2.png') }}" alt="xd">
                </article>

                <article class="contendores_img">
                    <img class="img_grid" src="{{ asset('img/index/sec3_img3.png') }}" alt="xd">
                </article>

                <article class="contendores_img">
                    <img class="img_grid" src="{{ asset('img/index/sec3_img4.png') }}" alt="xd">
                </article>

                <article class="contendores_img">
                    <img class="img_grid" src="{{ asset('img/index/sec3_img5.png') }}" alt="xd">
                </article>
            </article>

        </section>

    </section>

    {{-- seccion 4  --}}
    <section class="seccion_nuestra_historia">
        <article class="content_primario">
            {{-- fila 1 : 3 columnas --}}
            <article class="fila columna3">
                {{-- 3 columnas --}}
                <article class="columna none">
                    <article class="content_text">
                        <button>Nuestra Historia</button>
                        <p>ECOCREATIONS S.A.C. abrió sus puertas en <br>
                            2004, innovando por completo el concepto de Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Similique asperiores suscipit eos blanditiis exercitationem in explicabo
                            debitis dolor quod doloremque! Veniam quia in nisi asperiores facere, non voluptatum
                            provident rem?
                            productos ecológicos personalizado.</p>
                    </article>
                </article>
                <article class="columna none1">
                    <img src="{{ asset('img/index/sec4_img1.png') }}" alt="" class="content_img imgmedio">
                </article>
                <article class="columna none2">
                    <img src="{{ asset('img/index/sec4_img2.png') }}" alt="" class="content_img imgmedio">
                </article>
            </article>

            {{-- fila 2 : 2 columnas --}}
            <article class="fila columna2">
                {{--   2.columnas 2  --}}


                <article class="columna colum_largo">
                    <img src="{{ asset('img/index/sec4_img3.png') }}" alt="" class="content_img imgnoe">
                </article>
                <article class="columna colum_medio">
                    <img src="{{ asset('img/index/sec4_img4.png') }}" alt="" class="content_img imgmedio">
                </article>
            </article>
        </article>
    </section>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        // Mostrar el primer slide al cargar
        document.addEventListener("DOMContentLoaded", () => {
            showSlide(currentSlide);
        });
    </script>
     <script>
        let currentGroup = 0;
        const groupSize = 3;
        const sliderTrack = document.getElementById('sliderTrack');
        const cards = document.querySelectorAll('.slider-card');
        const totalGroups = Math.ceil(cards.length / groupSize);

        function updateSlider() {
            const cardWidth = cards[0].offsetWidth + 10; // 10px es padding
            const offset = currentGroup * groupSize * cardWidth;
            sliderTrack.style.transform = `translateX(-${offset}px)`;
        }

        function nextGroup() {
            if (currentGroup < totalGroups - 1) {
                currentGroup++;
                updateSlider();
            }
        }

        function prevGroup() {
            if (currentGroup > 0) {
                currentGroup--;
                updateSlider();
            }
        }

        window.addEventListener('resize', updateSlider);
        window.addEventListener('DOMContentLoaded', updateSlider);
    </script>


</body>

</html>
