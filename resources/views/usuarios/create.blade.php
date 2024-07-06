@extends('templates.master')


@section('title','Crear')


@section('contenido')

{{-- Formulario --}}
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Crear Usuario</h4>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="">
                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    </div>

                    {{-- Nombre --}}
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                    </div>

                    {{-- Perfil --}}
                    <div class="mb-3">
                        <label for="perfil_id" class="form-label">Perfil</label>
                        <select name="perfil_id" id="perfil_id" class="form-select" required>
                            @foreach($perfiles as $perfil)
                                <option value="{{ $perfil->id }}">{{ $perfil->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Contraseña --}}
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    {{-- Confirmar Contraseña --}}
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>

                    {{-- Botones --}}
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-secondary me-2">Restablecer</button>
                        <button type="submit" class="btn btn-success">Crear Usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- /Formulario --}}

@endsection