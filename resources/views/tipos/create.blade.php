@extends('templates/master')


@section('title', 'Agregar Tipo')


@section('contenido')

<div class="container">
    <div class="card">
        <h3 class="card-header border-0 text-center">Agregar Tipo</h3>
        <div class="card-body">
            <div class="row">
                <form method="POST" action="{{route('tipos.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-12 my-3">
                            <div class="col-12 my-3">
                                <label for="nombre" class="form-label">Nombre: </label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>

                            <div class="col-12 my-3">
                                <label for="costo" class="form-label">Costo: </label>
                                <input type="text" class="form-control" id="costo" name="costo" placeholder="Ingrese el costo del tipo">
                            </div>

                            <div class="col-12 mx-auto d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mx-3">AGREGAR</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection