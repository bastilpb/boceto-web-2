@extends('templates/master')


@section('title', 'Agregar Vehiculo')


@section('contenido')


<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
    <div class="card">
        <h3 class="card-header border-0 text-center">Agregar Vehiculo</h3>
        <div class="card-body">
            <div class="row">
                <form method="POST" action="{{ route('vehiculos.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-6 my-3">
                            <label for="patente" class="form-label">Patente: </label>
                            <input type="text" class="form-control" id="patente" name="patente">
                        </div>

                        <div class="col-6 my-3">
                            <label for="marca" class="form-label">Marca: </label>
                            <input type="text" class="form-control" id="marca" name="marca">
                        </div>

                        <div class="col-6 my-3">
                            <label for="modelo" class="form-label">Modelo: </label>
                            <input type="text" class="form-control" id="modelo" name="modelo">
                        </div>

                        <div class="col-6 my-3">
                            <label for="estado" class="form-label">Estado: </label>
                            <select class="form-select" id="estado" name="estado" disabled>
                                @foreach ($estados as $index => $estado)
                                <option value="{{$index+1}}">{{$estado}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-6 my-3">
                            <label for="tipo" class="form-label">Tipo: </label>
                            <select class="form-select" id="tipo" name="tipo">
                                @foreach ($tipos as $index => $tipo)
                                <option value="{{$index+1}}">{{$tipo->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 mx-auto d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mx-3">AGREGAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




















@endsection