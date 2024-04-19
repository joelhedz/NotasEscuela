@extends('layouts.principal')
@section('hijos')
<div class="container mt-5 ">
    <h1 class="mt-4">Crear Clase</h1>
    <div class="row">
        <div class="col">
            <form action="/clase" method="POST" class="mt-4">
                @csrf

                <div class="mb-3">
                    <label for="idClase">IdClase</label>
                    <input type="text" name="idclase" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>



                <div class="mb-3">
                    <label for="idSeccion">IdSeccion</label>
                    <select name="idseccion" class="form-select ">
                        @foreach($secciones as $seccion)
                        <option value="{{$seccion->id}}">{{$seccion->descripcion}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary w-25">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection