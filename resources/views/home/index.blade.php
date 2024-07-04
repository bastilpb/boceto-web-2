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

<div id="hero-carousel" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item c-item active">
            <img src="{{asset('images/car-1.jpg')}}" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption c-caption d-none d-md-block">
                <h1 class="">Arrienda ya!</h1>
                <p class="fs-5">El vehiculo que necesites, al mejor precio en el mercado</p>
                <a href="{{route('vehiculos.index')}}" class="btn btn-primary">Ver vehiculos disponibles</a>
            </div>
        </div>
        <div class="carousel-item c-item ">
            <img src="{{asset('images/car-1.jpg')}}" class="d-block w-100 c-img" alt="...">
        </div>
        <div class="carousel-item c-item">
            <img src="{{asset('images/car-1.jpg')}}" class="d-block w-100 c-img" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


@endsection