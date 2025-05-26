
@extends('layouts.app')
@section('title', 'About us')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
@endpush


@section('content')

    <main>
        <!-- Primera seccion para el titulo -->
        <section class="c-p-section">
            <!-- Izquierda -->
            <section class="c-section-1">
                <div class="c-img-container-1">
                    <img class="c-img-fondo-1" src="{{ asset('img/nosotros/vector1.png') }}" alt="Descripción">
                    <img class="c-img-superpuesta-1 flotando" src="{{ asset('img/nosotros/vector3.png') }}"
                        alt="Descripción">
                </div>
            </section>

            <!-- Centro -->
            <section class="c-section-center">
                <h1>NOSOTROS</h1>
            </section>

            <!-- Derecha -->
            <section class="c-section-2">
                <div class="c-img-container-2">
                    <img class="c-img-fondo-2" src="{{ asset('img/nosotros/vector4.png') }}" alt="Descripción">
                    <img class="c-img-superpuesta-2 flotando" src="{{ asset('img/nosotros/vector6.png') }}"
                        alt="Descripción">

                </div>
            </section>
        </section>

        <!-- Segunda Seccion para la parte de misión y visión -->
        <section class="c-p-mision-vision">
            <section>
                <h2>Misión</h2>
                <p>En EcoCreations, nuestra misión es ofrecer productos ecológicos de alta calidad que promuevan un
                    estilo de
                    vida saludable y sostenible, contribuyendo a la protección del medio ambiente y al bienestar de
                    nuestras comunidades.</p>
            </section>
            <section>
                <img src="{{ asset('img/nosotros/vector5.png') }}" alt="Descripción">
                <img class="flotando" src="{{ asset('img/nosotros/vector7.png') }}" alt="Descripción">
            </section>
            <section>
                <h2>Visión</h2>
                <p>Ser líderes en el mercado de productos ecológicos, reconocidos por nuestra innovación, compromiso
                    ambiental y responsabilidad social, inspirando a más personas a adoptar hábitos conscientes y
                    respetuosos con el planeta.</p>
            </section>
        </section>

        <!-- Sección de valores -->
        <h2 class="c-title-valores">Valores</h2>
        <section class="c-p-p-valores">
            <section class="c-p-valores">
                <div class="contenido-valores">
                    <img src="{{ asset('img/nosotros/compromiso.png') }}" alt="Descripción">
                    <h2>Compromiso</h2>
                </div>
            </section>
            <section class="c-p-valores">
                <div class="contenido-valores">
                    <img src="{{ asset('img/nosotros/innovación.png') }}" alt="">
                    <h2>Innovación</h2>
                </div>
            </section>
            <section class="c-p-valores">
                <div class="contenido-valores">
                    <img src="{{ asset('img/nosotros/personalización.png') }}" alt="">
                    <h2>Personalización</h2>
                </div>
            </section>
            <section class="c-p-valores">
                <div class="contenido-valores">
                    <img src="{{asset('img/nosotros/seguridad.png')}}" alt="Imagen de valores" />
                    <h2>Transparencia</h2>
                </div>
            </section>
        </section>
        <script src="{{ asset('js/nosotros.js') }}"></script>
    </main>

@endsection