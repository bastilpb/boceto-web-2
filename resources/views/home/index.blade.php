@extends('templates.master')


{{-- Este es el titulo de la pagina --}}
@section('title', 'Inicio')




@section('contenido')

<div class="container-fluid d-flex align-items-center justify-content-center min-vh-100">
    <div class="container bg-white border rounded p-2">
        <h1 class="d-flex align-items-center justify-content-center">Servicios Arriendos la V</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vehiculos</h5>
                        <p class="card-text">Vehiculos disponibles y sus caracteristicas.</p>
                        <a href="{{route('vehiculos.index')}}" class="btn btn-primary">Vehiculos</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Arrendar</h5>
                        <p class="card-text">Ingresar arriendos y seleccionar los datos necesarios.</p>
                        <a href="{{route('arriendos.index')}}" class="btn btn-primary">Arrendar</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gestion Usuarios</h5>
                        <p class="card-text">Edicion de todos los usuarios ingresados y por ingresar.</p>
                        <a href="{{route('usuarios.index')}}" class="btn btn-primary">Gestion</a>
                    </div>
                </div>

            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tipos</h5>
                        <p class="card-text">Los tipos de vehiculos disponibles para agregar.</p>
                        <a href="{{route('tipos.index')}}" class="btn btn-primary">Tipos</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gestion Clientes</h5>
                        <p class="card-text">Gestionar todos los clientes guardados.</p>
                        <a href="{{route('clientes.index')}}" class="btn btn-primary">Gestion Clientes</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gestionar Arriendos</h5>
                        <p class="card-text">Gestionar todos los arriendos.</p>
                        <a href="{{route('arriendos.index')}}" class="btn btn-primary">Gestion Arriendos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>




@endsection