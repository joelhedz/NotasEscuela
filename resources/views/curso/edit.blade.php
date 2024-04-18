@extends('layouts.principal')
@section('hijos')
<div class="container mt-5">
    <h1 class="mt-4">Editar Curso</h1>
    <div class="row">
        <div class="col">
            <form action="/curso/{{$editar->id}}" method="POST" class="mt-4">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="idCurso" class="form-label">IdCurso</label>
                    <input type="text" name="idcurso" id="idcurso" value="{{$editar->idcurso}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{$editar->nombre}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="iddescripcion" class="form-label">IdDescripcion</label>
                    <input type="text" name="iddescripcion" id="iddescripcion" value="{{$editar->iddescripcion}}" class="form-control">
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection