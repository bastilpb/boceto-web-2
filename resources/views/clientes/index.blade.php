@extends('templates.master')


@section('contenido')



<div class="container bg-white">


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $index => $cliente)
            <tr>
                <th scope="row">1</th>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->rut}}</td>
                <td>
                    <a href="{{route('clientes.edit',$cliente->rut)}}">Edit</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>




</div>


@endsection