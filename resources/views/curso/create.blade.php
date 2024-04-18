@extends('layouts.principal')
@section('hijos')
<div class="container mt-5 ">
    <h1 class="mt-4">Crear Curso</h1>
    <div class="row">
        <div class="col">
            <form action="/curso" method="POST" class="mt-4">
                @csrf

                <div class="mb-3">
                    <label for="idCurso" class="form-label">IdCurso</label>
                    <input type="text" name="idcurso" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" name="descripcion" class="form-control">
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection