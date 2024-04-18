@extends('layouts.principal')
@section('hijos')
<div class="container mt-5">
    <h1 class="mt-4">Editar Nota</h1>
    <div class="row">
        <div class="col">
            <form action="/nota/{{$editar->id}}" method="POST" class="mt-4">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="identidad" class="form-label">Identidad</label>
                    <input type="text" name="identidad" id="identidad" value="{{$editar->idalumno}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nota" class="form-label">Nota</label>
                    <input type="text" name="nota" id="nota" value="{{$editar->nota}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="idclase" class="form-label">Id Clase</label>
                    <input type="text" name="idclase" id="idclase" value="{{$editar->idclase}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="idseccion" class="form-label">Id Sección</label>
                    <input type="text" name="idseccion" id="idseccion" value="{{$editar->idseccion}}" class="form-control">
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsect