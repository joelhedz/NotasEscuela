@extends('layouts.principal')
@section('hijos')
<div class="container mt-5">
    <h1 class="mt-4">Eliminar Empleado</h1>
    <div class="row">
        <div class="col">
            <form action="/alumno/{{$eliminar->id}}" method="POST">
                @csrf
                @method('DELETE')

                <div class="mb-3">
                    <label for="identidad" class="form-label">Identidad</label>
                    <input type="text" name="identidad" id="identidad" value="{{$eliminar->idalumno}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="primerNombre" class="form-label">Primer Nombre</label>
                    <input type="text" name="primernombre" id="primerNombre" value="{{$eliminar->primernombre}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="segundoNombre" class="form-label">Segundo Nombre</label>
                    <input type="text" name="segundonombre" id="segundoNombre" value="{{$eliminar->segundonombre}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" value="{{$eliminar->apellidos}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo</label>
                    <input type="text" name="sexo" id="sexo" value="{{$eliminar->sexo}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="text" name="fechaN" id="fechaN" value="{{$eliminar->fechaN}}" class="form-control">
                </div>

                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection