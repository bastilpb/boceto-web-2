@extends('templates.master')


@section('title', 'Arriendos disponibles')



@section('contenido')


<div class="container-fluid d-flex justify-content-center align-items-center my-3">
    <div class="container py-2 rounded bg-white">
        <h2 class="text-center">Listado de Arriendos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Patente</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Fecha de Inicio</th>
                    <th scope="col">Fecha de Devolucion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($arriendos as $index => $arriendo)
                <tr>
                    <th scope="row">{{$index+1}}</th>
                    <td>{{$arriendo->vehiculo_patente}}</td>
                    <td>{{$arriendo->rut_cliente}}</td>
                    <td>{{$arriendo->fecha_inicio}}</td>
                    <td>{{$arriendo->fecha_devolucion}}</td>
                    <td><a href="{{route('arriendos.show',$arriendo)}}" class="btn btn-sm btn-primary bi bi-eye"></a></td>
                </tr> 
                @endforeach
        </table>
    </div>
    


</div>



@endsection