@extends('templates.master')


@section('title', 'Editar Cliente')


@section('contenido')

<div class="container">
    <div class="card">
        <h3 class="card-header border-0 text-center">Editar Cliente</h3>
        <div class="card-body">
            <div class="row">
                <form method="POST" action="{{ route('clientes.update')}}">
                    @csrf
                    <div class="row">

                        <div class="col-12 my-3">
                            <label for="rut" class="form-label">Rut </label>
                            <input type="text" class="form-control" name="rut" id="rut" value="{{$cliente->rut}}">
                        </div>
                        
                        <div class="col-12 my-3">
                            <label for="Nombre" class="form-label">Nombre: </label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{$cliente->nombre}}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary"> Editar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection