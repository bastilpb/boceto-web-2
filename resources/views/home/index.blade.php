@extends('templates.master')


{{-- Este es el titulo de la pagina --}}
@section('title', 'Inicio')


@section('contenido')
{{-- Todo lo que este aca dentro, hace parte del contenido de la pagina --}}

<style>
    .carousel-item {
        max-height: 880px;
    }

    .carousel-caption {
        bottom: 220px;
        z-index: 2;
    }

    .carousel-caption h5 {
        font-size: 70px;
        font-weight: 600;
        text-transform: uppercase;
        margin-top: 25px;
    }

    .carousel-caption p {
        width: 60%;
        margin: 10px auto;
        font-size: 18px;
    }

    .carousel-inner::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }
</style>



<div id="carousel" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('images/car-1.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <div class="d-none d-md-block">
                    <h5>Vehiculos</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                <a href="{{ route('vehiculos.index') }}">          
                    {{-- LINKEAMO LA RUTA Y RETORNAMO VISTA --}}
                    <button class="btn btn-primary mt-3 border-white">VEHICULOS</button>
                </a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{asset('images/llaves-1.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="d-none d-md-block">
                    <h5>Arrendar</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                <a href="">
                    <button class="btn btn-primary mt-3 border-white">ARRENDAR</button>
                </a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{asset('images/trafico-calle.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="d-none d-md-block">
                    <h5>Contacto</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                <a href=>
                    <button class="btn btn-primary mt-3 border-white">CONTACTO</button>
                </a>
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


@endsection