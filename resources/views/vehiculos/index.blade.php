@extends('templates.master')


@section('style')
<style>
    section {
        padding: 50px 100px;
    }

    .servicios-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, auto));
        gap: 1rem;
        margin-top: 2rem;
    }

    .servicios-container .card {
        padding: 10px;
        border-radius: 1rem;
        box-shadow: 1px 4px 41px rgba(0, 0, 0, 0, 1);
    }

    .servicios-container .card img {
        width: 100%;
        height: 200px;
    }

    .servicios-container img {
        width: 100%;
        height: 100%;
        border-radius: 1rem;
        object-fit: cover;
        object-position: center;
    }

    .servicios-container .card p {
        padding: 0 10px;
        border: 1px solid var(--text-color);
        width: 58px;
        border-radius: 0.5rem;
        margin: 1rem 0 1rem;
    }

    .servicios-container .card h3 {
        font-weight: 500;
    }

    .servicios-container .card h2 {
        font-size: 1.1rem;
        font-weight: 600;
        margin: 0.2rem 0 0.5rem;
    }

    .servicios-container .card h2 span {
        font-size: 0.8rem;
        font-weight: 500;
        color: var(--text-color);
    }
</style>

@endsection


@section('contenido')

<section class="servicios">

    <div class="heading d-flex justify-content-center align-items-center">
        <h1>Tipos de Vehiculos</h1>
    </div>

    <div class="servicios-container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 20rem;">
                    <img src="{{asset('images/chevroletsail (1).avif')}}" alt="">
                    <p>2020</p>
                    <h3>Chevrolet Sail</h3>
                    <h3>Bencina <span>15 Km/Lt.</span></h3>
                    <h2>$33.400 / <span>Dia</span></h2>
                    <a href="#">
                        <button type="submit" class="btn btn-primary border-white">Arrendar</button>
                    </a>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 20rem;">
                    <img src="{{asset('images/audirs5.jpg')}}" alt="">
                    <p>2022</p>
                    <h3>Audi RS 5</h3>
                    <h3>Bencina <span>9.6 Km/Lt.</span></h3>
                    <h2>$54.560 / <span>Dia</span></h2>
                    <a href="#">
                        <button type="submit" class="btn btn-primary border-white">Arrendar</button>
                    </a>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 20rem;">
                    <img src="{{asset('images/mazdacx30.jpg')}}" alt="">
                    <p>2019</p>
                    <h3>Mazda CX-30</h3>
                    <h3>Bencina <span>14.6 Km/Lt.</span></h3>
                    <h2>$41.070 / <span>Dia</span></h2>
                    <a href="#">
                        <button type="submit" class="btn btn-primary border-white">Arrendar</button>
                    </a>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 20rem;">
                    <img src="{{asset('images/susukibaleno.jpg')}}" alt="">
                    <p>2023</p>
                    <h3>Susuki Baleno</h3>
                    <h3>Bencina <span>20.5 Km/Lt.</span></h3>
                    <h2>$29.009 / <span>Dia</span></h2>
                    <a href="#">
                        <button type="submit" class="btn btn-primary border-white">Arrendar</button>
                    </a>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 20rem;">
                    <img src="{{asset('images/fordmustang.jpeg')}}" alt="">
                    <p>2021</p>
                    <h3>Ford Mustang</h3>
                    <h3>Bencina <span>10.5 Km/Lt.</span></h3>
                    <h2>$83.572 / <span>Dia</span></h2>
                    <a href="#">
                        <button type="submit" class="btn btn-primary border-white">Arrendar</button>
                    </a>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 20rem;">
                    <img src="{{asset('images/ford-150.jpg')}}" alt="">
                    <p>2020</p>
                    <h3>Ford F-150</h3>
                    <h3>Bencina <span>7 Km/Lt.</span></h3>
                    <h2>$64.425 / <span>Dia</span></h2>
                    <a href="#">
                        <button type="submit" class="btn btn-primary border-white">Arrendar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection