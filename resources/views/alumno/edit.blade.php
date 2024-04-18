@extends('layouts.principal')
@section('hijos')
<div class="container mt-5">
    <h1 class="mt-4">Editar Afiliado</h1>
    <div class="row">
        <div class="col">
            <form action="/alumno/{{$editar->id}}" method="POST" class="mt-4">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="identidad" class="form-label">Identidad</label>
                    <input type="text" name="identidad" id="identidad" value="{{$editar->idalumno}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="primerNombre" class="form-label">Primer Nombre</label>
                    <input type="text" name="nombre" id="primerNombre" value="{{$editar->primernombre}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="segundoNombre" class="form-label">Segundo Nombre</label>
                    <input type="text" name="nombre" id="segundoNombre" value="{{$editar->segundonombre}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" value="{{$editar->apellidos}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo</label>
                    <input type="text" name="sexo" id="sexo" value="{{$editar->sexo}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="text" name="fechaN" id="fechaN" value="{{$editar->fechaN}}" class="form-control">
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection