@extends('templates.master')


@section('title', 'Editar Usuario')


@section('contenido')

<div class="container">
    <div class="card">
        <h3 class="card-header border-0 text-center">Editar Usuario</h3>
        <div class="card-body">
            <div class="row">
                <form method="POST" action="{{ route('usuarios.update')}}">
                    @csrf
                    <div class="row">
                        <div class="col-12 my-3">
                            <label for="email" class="form-label">Correo </label>
                            <input type="email" class="form-control" name="email" id="email" value="{{$usuario->email}}">
                        </div>
                        <div class="col-12 my-3">
                            <label for="nombre" class="form-label">Nombre </label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{$usuario->nombre}}">
                        </div>
                        
                        <div class="col-12 my-3">
                            <label for="perfil" class="form-label">Perfil: </label>
                            <input type="text" class="form-control" name="perfil" id="perfil" value="{{$usuario->perfil_id}}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary"> Editar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection