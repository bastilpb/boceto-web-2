@extends('templates.master')


@section('title', 'Editar Tipo')


@section('contenido')

<div class="container">
    <div class="card">
        <h3 class="card-header border-0 text-center">Editar Tipo</h3>
        <div class="card-body">
            <div class="row">
                <form method="POST" action="{{ route('tipos.update')}}">
                    @csrf
                    <div class="row">
                        <div class="col-12 my-3">
                            <label for="nombre" class="form-label">Nombre: </label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{$tipo->nombre}}">
                        </div>
                        
                        <div class="col-12 my-3">
                            <label for="costo" class="form-label">Costo: </label>
                            <input type="text" class="form-control" name="costo" id="costo" value="{{$tipo->costo}}">
                        </div>

                    </div>

                    <a href="#" class="btn btn-primary">Editar</a>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection