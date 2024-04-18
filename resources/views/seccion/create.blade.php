@extends('layouts.principal')
@section('hijos')

<div class="container mt-5 ">
    <h1 class="mt-4">Crear Seccion</h1>
    <div class="row">
        <div class="col">
            <form action="/seccion" class="mt-4" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">IdSeccion</label>
                    <input type="text" name="idseccion" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Descripcion</label>
                    <input type="text" maxlength="1" name="descripcion" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Jornanda</label>
                    <select name="jornada" id="jornada" class="form-select ">
                        <option value="">Seleccione una jornada</option>
                        <option value="Matutina">Matutina</option>
                        <option value="Vespertina">Vespertina</option>
                        <option value="Nocturna">Nocturna</option>
                    </select>

                </div>

                <div class="mb-3">
                    <label for="">Periodo</label>
                    <input type="text" name="periodo" class="form-control">
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary w-25  ">Guardar</button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection