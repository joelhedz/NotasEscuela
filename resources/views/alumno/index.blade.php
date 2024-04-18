@extends('layouts.principal')
@section('hijos')

<h1 class="bg-body-secondary text-center p-3 fs-3 ">Modulo de Alumnos</h1>

<div class="container mt-4 ">
    <a href="alumno/create" class="btn btn-primary">Crear nuevo alumno</a>
    <table class="table table-striped table-hover table-borderless mt-3 align-middle">
        <thead class="table-light bg-primary ">
            <tr>
                <th>ID</th>
                <th>Identidad</th>
                <th>Primer nombre</th>
                <th>Segundo nombre</th>
                <th>Apellidos</th>
                <th>Sexo</th>
                <th>Fecha de nacimiento</th>
                <th class="text-center ">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($alumnos as $alumno)
            <tr>
                <th class="fw-medium ">{{$alumno->id}}</th>
                <th class="fw-medium ">{{$alumno->idalumno}}</th>
                <th class="fw-medium ">{{$alumno->primernombre}}</th>
                <th class="fw-medium ">{{$alumno->segundonombre}}</th>
                <th class="fw-medium ">{{$alumno->apellidos}}</th>
                <th class="fw-medium ">{{$alumno->sexo}}</th>
                <th class="fw-medium ">{{$alumno->fechaN}}</th>
                <th class="fw-medium ">{{$alumno->edad}}</th>
                <th class="text-center d-flex gap-4 justify-content-center ">
                    <a href="/nota/{{$alumno->id}}" class="btn btn-success">Notas</a>
                    <a href="/alumno/{{$alumno->id}}/edit" class="btn btn-info">Editar</a>

                    <form action="/alumno/{{$alumno->id}}" method="POST">
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