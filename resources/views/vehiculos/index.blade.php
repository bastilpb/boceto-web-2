@extends('templates.master')


@section('title', 'Vehiculos')


@section('contenido')




<div class="container-fluid d-flex justify-content-center">

    <div class="container bg-white rounded">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Patente</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($vehiculos as $index => $vehiculo)
                <tr>
                    <th scope="row">{{$index+1}}</th>
                    <td>{{$vehiculo->patente}}</td>
                    <td>{{$vehiculo->marca}}</td>
                    <td>{{$vehiculo->modelo}}</td>
                    <td>{{$vehiculo->estado}}</td>
                    <td>{{$vehiculo->tipo->nombre}}</td>
                    <td><a href="{{route('vehiculos.show',$vehiculo)}}" class="btn btn-sm btn-primary bi bi-eye"></a></td>
                    <td>

                    

                        <form method="POST" action="{{route('vehiculos.destroy',$vehiculo->patente)}}">
                            @csrf

                            @method('DELETE')

                            <button class="btn btn-danger btn-sm bi bi-trash" onclick="return confirm('¿Estás seguro de eliminar este vehiculo??')"></button>

                        </form>
                        
                        <a href="{{route('vehiculos.edit', $vehiculo)}}">
                            <button class="btn btn-primary btn-sm bi bi-pencil"></button> 
                          </a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            <a href="{{route('vehiculos.create')}}" class="btn btn-outline-success fs-5 my-2 bi bi-plus w-100"></a>
        </div>
    </div>



</div>




@endsection