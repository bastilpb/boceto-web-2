@extends('templates.master')


@section('title', 'Clientes')


@section('contenido')

<div class="container-fluid d-flex justify-content-center">
    <div class="container bg-white rounded">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Rut</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>###</td>
                    <td>###</td>
                    <td>
                        <a href="{{route('clientes.edit', $tipo)}}">
                            <button class="btn btn-primary btn-sm bi bi-pencil"></button> 
                          </a>
                        
                        <button class="btn btn-danger btn-sm bi bi-trash"></button>
                    </td>
                </tr>
            </tbody>

        </table>

        <a href="#" class="btn btn-outline-success fs-5 my-2 bi bi-plus w-100"></a>

        <a href="#" class="btn btn-primary">Historial Cliente</a>

    </div>
</div>



@endsection