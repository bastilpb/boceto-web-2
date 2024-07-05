@extends('templates.master')


@section('title', 'Vehiculos')



@section('contenido')


<div class="container-fluid d-flex justify-content-center align-items-center my-3">

    <div class="row">
        <div class="col-12 text-center">
            <h1 class="fw-bold">Tipos de Vehiculos</h1>
        </div>

        <div class="col-4 my-2">
            <div class="card rounded">
                <img src="{{asset('images/chevroletsail.avif')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Chevrolet Sail 2020</h5>
                    <p class="card-text">Tipo de Vehiculo: Sedan.<br>Estado del Vehiculo: <br>Tipo de combustible: Bencina.<br>Rendimiento: 15<em>[km]/Lt.</em><br>Costo: $33.000<em>/dia.</em></p>
                    <a href="#" class="btn btn-primary">Arrendar!</a>
                </div>
            </div>
        </div>

        <div class="col-4 my-2">
            <div class="card rounded">
                <img src="{{asset('images/susukibaleno.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Susuki Baleno 2023</h5>
                    <p class="card-text">Tipo de Vehiculo: Hatchback.<br>Estado del Vehiculo: <br>Tipo de combustible: Bencina.<br>Rendimiento: 20.5<em>[km]/Lt.</em><br>Costo: $29.000<em>/dia.</em></p>
                    <a href="#" class="btn btn-primary">Arrendar!</a>
                </div>
            </div>
        </div>

        <div class="col-4 my-2">
            <div class="card rounded">
                <img src="{{asset('images/mazdacx30.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mazda CX-30 2019</h5>
                    <p class="card-text">Tipo de Vehiculo: Suv.<br>Estado del Vehiculo: <br>Tipo de combustible: Bencina.<br>Rendimiento: 14.6<em>[km]/Lt.</em><br>Costo: $41.000<em>/dia.</em></p>
                    <a href="#" class="btn btn-primary">Arrendar!</a>
                </div>
            </div>
        </div>

        <div class="col-4 my-2">
            <div class="card rounded">
                <img src="{{asset('images/audirs5.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Audi RS 5 2022</h5>
                    <p class="card-text">Tipo de Vehiculo: Coupé.<br>Estado del Vehiculo: <br>Tipo de combustible: Bencina.<br>Rendimiento: 9.6<em>[km]/Lt.</em><br>Costo: $54.0O0<em>/dia.</em></p>
                    <a href="#" class="btn btn-primary">Arrendar!</a>
                </div>
            </div>
        </div>
    
        <div class="col-4 my-2">
            <div class="card rounded">
                <img src="{{asset('images/fordmustang.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ford Mustang 2021</h5>
                    <p class="card-text">Tipo de Vehiculo: Deportivo.<br>Estado del Vehiculo: <br>Tipo de combustible: Bencina.<br>Rendimiento: 10.5<em>[km]/Lt.</em><br>Costo: $83.000<em>/dia.</em></p>
                    <a href="#" class="btn btn-primary">Arrendar!</a>
                </div>
            </div>
        </div>

        <div class="col-4 my-2">
            <div class="card rounded">
                <img src="{{asset('images/ford-150.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ford F-150 2020</h5>
                    <p class="card-text">Tipo de Vehiculo: Pickup.<br>Estado del Vehiculo: <br>Tipo de combustible: Bencina.<br>Rendimiento: 7<em>[km]/Lt.</em><br>Costo: $64.000<em>/dia.</em></p>
                    <a href="#" class="btn btn-primary">Arrendar!</a>
                </div>
            </div>
        </div>

        

    </div>
</div>



@endsection