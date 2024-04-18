@extends('layouts.principal')
@section('hijos')

<h1 class="bg-body-secondary text-center fs-3 p-3">Registrar Secciones</h1>

<div class="container mt-5">
    <a href="seccion/create" class="btn btn-primary  ">Registrar seccion</a>
    <table class="table mt-4">
        <thead class="table table-striped table-hover table-borderless  align-middle">
            <tr class="table-light bg-primary ">
                <th>ID</th>
                <th>IdSeccion</th>
                <th>Descripcion</th>
                <th>Jornanda</th>
                <th>Periodo</th>
                <th class="text-center ">Acciones</th>
            </tr>
        </thead>

        <tbody class="table-group-divider fw-light ">
            @foreach($secciones as $seccion)
            <tr>
                <th class="fw-medium ">{{$seccion->id}}</th>
                <th class="fw-medium ">{{$seccion->idseccion}}</th>
                <th class="fw-medium ">{{$seccion->descripcion}}</th>
                <th class="fw-medium ">{{$seccion->jornada}}</th>
                <th class="fw-medium ">{{$seccion->periodo}}</th>
                <th class="text-center d-flex gap-4 justify-content-center ">
                    <a href="/seccion/{{$seccion->id}}/edit" class="btn btn-info">Editar</a>
                <th>
                    <form action="/seccion/{{$seccion->id}}" method="POST">
                        @csrf
                        @method('Delete')
                        <button type="submit" class="btn btn-warning">Eliminar</button>
                    </form>
                </th>
                </th>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection