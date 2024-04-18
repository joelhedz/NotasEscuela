@extends('layouts.principal')
@section('hijos')
<div class="container mt-5">
    <h1 class="mt-4">Crear Afiliado</h1>
    <div class="row">
        <div class="col">
            <form action="/alumno" method="POST" class="mt-4">
                @csrf

                <div class="mb-3">
                    <label for="identidad" class="form-label">Identidad</label>
                    <input type="text" name="identidad" id="identidad" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="primerNombre" class="form-label">Primer Nombre</label>
                    <input type="text" name="primernombre" id="primerNombre" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="segundoNombre" class="form-label">Segundo Nombre</label>
                    <input type="text" name="segundonombre" id="segundoNombre" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo</label>
                    <input type="text" name="sexo" id="sexo" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="text" name="fechaN" id="fechaNacimiento" class="form-control">
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection