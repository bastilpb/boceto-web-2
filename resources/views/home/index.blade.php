@extends('templates.master')


{{-- Este es el titulo de la pagina --}}
@section('title', 'Inicio')


@section('style')

<style>
    .c-item {
        height: 90vh;
    }

    .c-img {
        height: 100%;
        object-fit: cover;
        filter: brightness(0.4);
    }
</style>

@endsection



@section('contenido')


<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active c-item">
            <img src="{{asset('images/car-1.jpg')}}" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Nuestras Opciones</h5>
                <a href="{{route('vehiculos.index')}}" class="btn btn-primary">Ver Vehiculos</a>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="{{asset('images/llaves-1.jpg')}}" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Arrienda AHORA!!!</h5>
                <a href="{{route('arriendos.index')}}" class="btn btn-primary">Arrendar</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


@endsection