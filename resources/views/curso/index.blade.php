@extends('layouts.principal')
@section('hijos')

<h1 class="fs-3 bg-body-secondary text-center  p-3 ">Registrar Cursos</h1>

<div class="container mt-4">
    <a href="curso/create" class="btn btn-primary">Registrar curso</a>

    <table class="table mt-3 table table-striped table-hover table-borderless  align-middle">
        <thead class="table-light bg-primary ">
            <tr>
                <th>ID</th>
                <th>IdCurso</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th class="text-center ">Acciones</th>
            </tr>
        </thead>

        <tbody class="table-group-divider fw-light ">
            @foreach($cursos as $curso)
            <tr>
                <th class="fw-medium ">{{$curso->id}}</th>
                <th class="fw-medium ">{{$curso->idcurso}}</th>
                <th class="fw-medium ">{{$curso->nombre}}</th>
                <th class="fw-medium ">{{$curso->descripcion}}</th>
                <th class="text-center d-flex gap-4 justify-content-center ">
                    <a href="/curso/{{$curso->id}}/edit" class="btn btn-info">Editar</a>

                    <form action="/curso/{{$curso->id}}" method="POST">
                        @csrf
                        @method('Delete')
                        <button type="submit" class="btn btn-warning">Eliminar</button>
                    </form>

                </th>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection