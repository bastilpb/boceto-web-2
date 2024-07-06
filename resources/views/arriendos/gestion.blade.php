@extends('templates.master')


@section('title', 'Gestion Arriendos')


@section('contenido')


<div class="container-fluid d-flex justify-content-center">
    <div class="container bg-white rounded">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Arriendo Activo</th>
                    <th scope="col">Arriendo Finalizado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>###</td>
                    <td>###</td>
                    <td>
                        <button class="btn btn-primary btn-sm bi bi-pencil"></button>
                        <button class="btn btn-danger btn-sm bi bi-trash"></button>
                    </td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td>###</td>
                    <td>###</td>
                    <td>
                        <button class="btn btn-primary btn-sm bi bi-pencil"></button>
                        <button class="btn btn-danger btn-sm bi bi-trash"></button>
                    </td>
                </tr>

                <tr>
                    <th scope="row">3</th>
                    <td>###</td>
                    <td>###</td>
                    <td>
                        <button class="btn btn-primary btn-sm bi bi-pencil"></button>
                        <button class="btn btn-danger btn-sm bi bi-trash"></button>
                    </td>
                </tr>
            </tbody>

        </table>

        <a href="#" class="btn btn-outline-success fs-5 my-2 bi bi-plus w-100"></a>

    </div>
</div>



@endsection