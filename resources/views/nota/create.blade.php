@extends('layouts.principal')
@section('hijos')
<div class="container mt-5">
    <h1 class="mt-4">Guardar Nota</h1>
    <div class="row">
        <div class="col">
            <form action="/nota" method="POST" class="mt-4">
                @csrf

                <div class="mb-3">
                    <label for="idalumno" class="form-label">Identidad</label>
                    <input type="text" name="idalumno" value="{{$identidad}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nota" class="form-label">Nota</label>
                    <input type="text" name="nota" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="idClase" class="form-label">Id Clase</label>
                    <input type="text" name="idclase" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="idSeccion" class="form-label">Id Sección</label>
                    <input type="text" name="idseccion" class="form-control">
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection