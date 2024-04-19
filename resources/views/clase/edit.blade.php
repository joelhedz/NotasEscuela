@extends('layouts.principal')
@section('hijos')
<div class="container mt-5">
    <h1 class="mt-4">Editar Clase</h1>
    <div class="row">
        <div class="col">
            <form action="/clase/{{$editar->id}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="idClase" class="form-label">IdClase</label>
                    <input type="text" name="idclase" id="idclase" value="{{$editar->idclase}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{$editar->nombre}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="idSeccion">IdSeccion</label>
                    <select name="idseccion" class="form-select ">
                        @foreach($secciones as $seccion)
                        <option value="{{$seccion->id}}" {{$seccion->descripcion == $seccionSeleccionada->descripcion?'selected':''}}>{{$seccion->descripcion}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection