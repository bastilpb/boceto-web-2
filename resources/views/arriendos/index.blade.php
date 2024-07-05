@extends('templates.master')


@section('title', 'arriendos')

@section('style')

<style>
    body{
        background-image: linear-gradient(#023E8A, #0196C7);
    }

</style>

@endsection

@section('contenido')

<div class="container-fluid d-flex align-items-center justify-content-center min-vh-100">
    <div class="container bg-white border border-primary rounded p-2">

        <form method="POST" action="" >
            
            <div class="row">

                <div class="text-center">
                    <h1 class="fw-bold">Arrendar un vehiculo</h1>
                </div>

                <div class="col-6 my-2">
                    <label for="patente" class="form-label"></label>
                    <input type="text" id="patente" name="patente" placeholder="Patente: " class="form-control">
                </div>

                <div class="col-6 my-2">
                    <label for="rut" class="form-label"></label>
                    <input type="text" id="rut" name="rut" placeholder="Rut: " class="form-control">
                </div>

                <div class="col-6 my-2">
                    <label for="dia-arriendo" class="form-label"></label>
                    <input type="text" id="dia_arriendo" name="dia_arriendo" placeholder="Dia Arriendo: " class="form-control">
                </div>

                <div class="col-6 my-2">
                    <label for="dia-entrega" class="form-label"></label>
                    <input type="text" id="dia_entrega" name="dia_entrega" placeholder="Dia Entrega: " class="form-control"> 
                </div>

                <div class="col-12 my-2">
                    <label for="total-pago" class="form-label"></label>
                    <input type="text" id="total_pago" name="total_pago" placeholder="Total a Pagar: " class="form-control">
                </div>

                <div class="col-12 my-2">
                    <label for="imagen-vehiculo" class="form-label">Imagen de entrega del vehiculo: </label>
                    <input type="file" id="imagen_vehiculo" name="imagen_vehiculo" class="form-control-file">
                </div>
                
                <div class="col-12 text-end">
                    <button class="btn btn-primary" type="submit">Ingresar Arriendo</button>
                </div>
            </div>
        </form>

    </div>

</div>





















@endsection