@extends('templates.master')


@section('title', 'Gestion Usuario')


@section('contenido')

<div class="container-fluid d-flex justify-content-center">
    <div class="container bg-white rounded">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Perfil</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($usuarios as $index => $usuario)
                <tr>
                    <th scope="row">{{$index+1}}</th>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->perfil->nombre}}</td>
                    <td>
                        <button class="btn btn-primary btn-sm bi bi-pencil"></button>
                        <button class="btn btn-danger btn-sm bi bi-trash"></button>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        
        <div class="d-flex justify-content-center">
            <a href="" class="btn btn-outline-success fs-5 my-2 bi bi-plus w-100"></a>
        </div>
    </div>
</div>

@endsection