@extends('templates.master')


@section('title', 'Arriendos disponibles')



@section('contenido')


<div class="container-fluid d-flex justify-content-center align-items-center my-3">

    <div class="row">
        <div class="col-12 text-center">
            <h1 class="fw-bold text-white">Vehiculos Disponibles</h1>
        </div>


        @foreach($vehiculos as $index => $vehiculo)
        <div class="col-4 my-2">
            <div class="card rounded">
                <img src="{{asset('images/chevroletsail.avif')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$vehiculo->marca}} {{$vehiculo->modelo}} {{$vehiculo->patente}}</h5>
                    <p class="card-text">Tipo de Vehiculo: {{$vehiculo->tipo->nombre}}.<br>Estado del Vehiculo: {{$vehiculo->estado}}<br>Costo: ${{$vehiculo->tipo->costo}}<em>/dia.</em></p>
                    <a href="{{route('arriendos.create',$vehiculo)}}" class="btn btn-primary">Arrendar!</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>



@endsection