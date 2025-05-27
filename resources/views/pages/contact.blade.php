@extends('layouts.app')
@section('title', 'Contact')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')

<article class="contact-page">
    <section class="contact-page__form">
        <form action="{{ route('contact.send') }}" method="POST" class="contact-page__form-element">
            @csrf
            <h2 class="contact-page__title">CONTÁCTANOS</h2>
            <p class="contact-page__description">Déjanos tus datos y te escribimos pronto </p>

            <div class="contact-page__form-group">
                <label for="nombre" class="contact-page__label">Nombre/s <span
                        class="contact-page__required">*</span></label>
                <input type="text" id="nombre" name="nombre" class="contact-page__input" placeholder="José Antonio">
            </div>

            <div class="contact-page__form-group">
                <label for="apellidos" class="contact-page__label">Apellidos <span
                        class="contact-page__required">*</span></label>
                <input type="text" id="apellidos" name="apellidos" class="contact-page__input"
                    placeholder="García Lozano">
            </div>

            <div class="contact-page__form-group">
                <label for="correo" class="contact-page__label">Correo electrónico <span
                        class="contact-page__required">*</span></label>
                <input type="email" id="correo" name="correo" class="contact-page__input"
                    placeholder="example@hotmail.com">
            </div>

            <div class="contact-page__form-group">
                <label for="asunto" class="contact-page__label">Asunto <span
                        class="contact-page__required">*</span></label>
                <input type="text" id="asunto" name="asunto" class="contact-page__input"
                    placeholder="Ej: Consulta sobre servicios de personalización">
            </div>

            <div class="contact-page__form-group">
                <label for="razon_social" class="contact-page__label">Razón Social (Opcional)</label>
                <input type="text" id="razon_social" name="razon_social" class="contact-page__input"
                    placeholder="Ej: InnovaTech Soluciones Digitales S.A.C.">
            </div>

            <div class="contact-page__form-group">
                <label for="ruc" class="contact-page__label">RUC (Opcional)</label>
                <input type="text" id="ruc" name="ruc" class="contact-page__input" placeholder="Ej: 20458796321">
            </div>

            <div class="contact-page__form-group">
                <button type="submit" class="contact-page__submit">Enviar mensaje</button>
            </div>
        </form>
    </section>

    <div class="contact-page__services">
        <figure>
            <img src="{{ asset('img/contact/bg-image-contact.jpg') }} " alt="Imagen de contacto" class="contact-page__services-background">
        </figure>
        <div class="contact-page__services-group">
            <div class="contact-page__service-item">
                <img src="{{ asset('img/contact/location.png') }} " alt="location" class="contact-page__service-icon">
                <h3 class="contact-page__service-title">Ubicación</h3>
                <p class="contact-page__service-description">Ubicados en el centro de la ciudad, con fácil acceso y
                    disponibilidad</p>
            </div>
            <div class="contact-page__service-item">
                <img src="{{ asset('img/contact/support.png') }} " alt="support" class="contact-page__service-icon">
                <h3 class="contact-page__service-title">Atención al Cliente</h3>
                <p class="contact-page__service-description">En el centro, con fácil acceso y estacionamiento</p>
            </div>
            <div class="contact-page__service-item">
                <img src="{{ asset('img/contact/timer.png') }} " alt="timer" class="contact-page__service-icon">
                <h3 class="contact-page__service-title">Tiempo de respuesta</h3>
                <p class="contact-page__service-description">En el centro, con fácil acceso y estacionamiento</p>
            </div>
            <div class="contact-page__service-item">
                <img src="{{ asset('img/contact/shield-quarter.png') }} " alt="shield" class="contact-page__service-icon">
                <h3 class="contact-page__service-title">Privacidad</h3>
                <p class="contact-page__service-description">Manejamos tu información con total confidencialidad.
                </p>
            </div>
        </div>
    </div>
</article>

@endsection