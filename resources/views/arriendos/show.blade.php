@extends('templates.master')


@section('title', 'Detalles del Arriendo')


@section('contenido')




<div class="container-fluid">

    <div class="card">
        <div class="card-header">
          Informacion del arriendo
        </div>
        <div class="card-body">
          <p class="card-text">Rut del cliente: {{$arriendo->cliente->nombre}}<br></p>
          <p class="card-text">Nombre del cliente: {{$arriendo->cliente->rut}}<br></p>
          <p class="card-text">Patente del vehiculo: {{$arriendo->vehiculo->patente}}<br></p>
          <p class="card-text">Fecha de inicio: {{$arriendo->fecha_inicio}}<br></p>
          <p class="card-text">Fecha de termino: <br></p>
          <p class="card-text">Fecha de devolucion: {{$arriendo->fecha_devolucion}}<br></p>
        </div>
      </div>


</div>








@endsection