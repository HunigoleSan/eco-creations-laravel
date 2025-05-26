@extends('layouts.app')
@section('title', 'Productos')

@push('styles')
<link rel="stylesheet" href="{{asset('css/products.css')}}">
@endpush

@section('content')

<section class="nav-category">
    <ul class="list list-custom-nav-category">
        <li class="dropdown-hover">
            <p class="list-title">Accesorios</p>
            <ul class="dropdown-show">
                <li class="mb-1 dropdown-title">Accesorios</li>
                <li><a class="category" href="{{route('productos.category', 1)}}">Pulseras</a></li>
                <li><a class="category" href="{{route('productos.category', 2)}}">Collares</a></li>
                <li><a class="category" href="{{route('productos.category', 3)}}">Llaveros</a></li>
                <li><a class="category" href="{{route('productos.category', 4)}}">Aretes</a></li>
                <li><a class="category" href="{{route('productos.category', 5)}}">Tobilleras</a></li>
                <li><a class="category" href="{{route('productos.category', 6)}}">Diadernas</a></li>
            </ul>
        </li>
        <li class="dropdown-hover">
            <p class="list-title">Árticulos</p>
            <ul class="dropdown-show">
                <li class="mb-1 dropdown-title">Árticulos</li>
                <li><a class="category" href="#">Pulseras con nombres</a></li>
                <li><a href="#">Collares con fecha</a></li>
                <li><a href="#">Accesorios</a></li>
                <li><a href="#">Packs para eventos</a></li>
            </ul>
        </li>
        <li class="dropdown-hover">
            <p class="list-title">Regalos</p>
            <ul class="dropdown-show">
                <li class="mb-1 dropdown-title">Regalos</li>
                <li><a class="category" href="#">Cajas de regalos</a></li>
                <li><a href="#">Kits para fechas especiales</a></li>
                <li><a href="#">Bolsitas ecológicas</a></li>
                <li><a href="#">Tarjetas con semillas</a></li>
                <li><a href="#">Regalos corporativos</a></li>
            </ul>
        </li>
        <li class="dropdown-hover">
            <p class="list-title">Artesanales</p>
            <ul class="dropdown-show">
                <li class="mb-1 dropdown-title">Artesanales</li>
                <li><a class="category" href="#">Bisutería</a></li>
                <li><a href="#">Textiles</a></li>
                <li><a href="#">Carámica y arcillas</a></li>
                <li><a href="#">Madera</a></li>
                <li><a href="#">Papel y cartón</a></li>
                <li><a href="#">Elementos para decoración</a></li>
            </ul>
        </li>
    </ul>
</section>
<section class="containerProducts">
    <!-- AQUI SE MUESTRA TODOS LOS PRODUCTOS -->
    @foreach($products as $pro)
        @livewire('product-card',['pro' => $pro])
    @endforeach
</section>


@endsection