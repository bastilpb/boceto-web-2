@extends('templates.master')


@section('title', 'Editar Usuario')


@section('contenido')

<div class="container">
    <div class="card">
        <h3 class="card-header border-0 text-center">Editar Vehiculo</h3>
        <div class="card-body">
            <div class="row">
                <form method="POST" action="{{ route('vehiculos.update',$vehiculo)}}">
                    @csrf
                    <div class="col-12 my-3">
                        <label for="patente" class="form-label">Patente: </label>
                        <input type="text" class="form-control" name="patente" id="patente"
                            value="{{$vehiculo->patente}}">
                    </div>

                    <div class="col-12 my-3">
                        <label for="marca" class="form-label">Marca: </label>
                        <input type="text" class="form-control" name="marca" id="marca" value="{{$vehiculo->marca}}">
                    </div>

                    <div class="col-12 my-3">
                        <label for="modelo" class="form-label">Modelo: </label>
                        <input type="text" class="form-control" name="modelo" id="modelo" value="{{$vehiculo->modelo}}">
                    </div>

                    <div class="col-12 my-3">
                        <label for="tipo" class="form-label">Tipo: </label>
                        <select name="tipo" id="tipo" class="form-select">
                            @foreach($tipos as $tipo)
                            <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <label for="estado">Estado del vehiculo: </label>
                    <select name="estado" id="estado" class="form-select">
                        @foreach($estados as $estado)
                        <option>{{$estado}}</option>
                        @endforeach
                    </select>

                    <button class="btn btn-primary my-3" type="submit">Editar</button>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection