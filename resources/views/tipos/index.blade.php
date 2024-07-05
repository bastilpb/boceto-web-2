@extends('templates.master')


@section('title', 'tipos')

@section('style')

<style>
  body {
    background-image: linear-gradient(#023E8A, #0196C7);
  }
</style>

@endsection

@section('contenido')

{{-- CREAR CARTAS COMO EN VEHICULOS,INDEX . LISTA DE TODOS LOS TIPOS DE VEHICULOS BOTON PARA EDITAR TIPOS DE VEHICULOS
BOTON PARA ELIMINAR TIPO DE VEHICULO Y BOTON PARA AGREGAR TIPO DE VEHICULO--}}

<div class="container-fluid d-flex align-items-center justify-content-center min-vh-100">
  <div class="container bg-white border rounded p-2">
    <table class="table table-borderer border-primary">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Costo</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>

      <tbody class="table-group-divider">

        @foreach($tipos as $index => $tipo)
        <tr>
          <th scope="row">{{$index+1}}</th>
          <td>{{$tipo->nombre}}</td>
          <td>${{$tipo->costo}}</td>
          <td>

            {{-- <button class="btn btn-primary btn-sm bi bi-pencil"></button> --}}


            <form method="POST" action="{{route('tipos.destroy',$tipo->id)}}">
              @csrf

              @method('DELETE')

              <button class="btn btn-danger btn-sm bi bi-trash" onclick="return confirm('¿Estás seguro de eliminar este tipo??')"></button>

          </form>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="d-flex justify-content-center">
      <a href="{{route('tipos.create')}}" class="btn btn-outline-success fs-5 my-2 bi bi-plus w-100"></a>
    </div>
  </div>
</div>





@endsection