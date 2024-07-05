@extends('templates.master')


@section('title', 'tipos')

@section('style')

<style>
    body{
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
                <th scope="col">Patente</th>
                <th scope="col">Nombre</th>
                <th scope="col">Costo</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
    
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">1</th>
                <td>## ## ##</td>
                <td>Sedan</td>
                <td>$33.000</td>
                <td>
                    <button class="btn btn-primary btn-sm">Editar</button> 
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
              </tr>
    
              <tr>
                <th scope="row">2</th>
                <td>## ## ##</td>
                <td>Hatchback</td>
                <td>$29.000</td>
                <td>
                    <button class="btn btn-primary btn-sm">Editar</button> 
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
              </tr>
    
              <tr>
                <th scope="row">3</th>
                <td>## ## ##</td>
                <td>Suv</td>
                <td>$41.000</td>
                <td>
                    <button class="btn btn-primary btn-sm">Editar</button> 
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
              </tr>
    
              <tr>
                <th scope="row">4</th>
                <td>## ## ##</td>
                <td>Coupe</td>
                <td>$54.000</td>
                <td>
                    <button class="btn btn-primary btn-sm">Editar</button> 
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
              </tr>
    
              <tr>
                <th scope="row">5</th>
                <td>## ## ##</td>
                <td>Deportivo</td>
                <td>$83.000</td>
                <td>
                    <button class="btn btn-primary btn-sm">Editar</button> 
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
              </tr>
    
              <tr>
                <th scope="row">6</th>
                <td>## ## ##</td>
                <td>Pickup</td>
                <td>$64.000</td>
                <td>
                    <button class="btn btn-primary btn-sm">Editar</button> 
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
</div>





@endsection