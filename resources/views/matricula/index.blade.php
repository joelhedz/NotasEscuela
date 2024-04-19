@extends('layouts.principal')
@section('hijos')

<h1 class="bg-body-secondary text-center fs-3 p-3 ">Modulo de Matriculas</h1>

<div class="container mt-4 ">
    <a href="matricula/create" class="btn btn-primary">Nueva Matricula</a>

    <table class="table table-striped table-hover table-borderless  align-middle mt-3">
        <thead class="table-light bg-primary ">
            <tr>
                <th>ID</th>
                <th>Alumno</th>
                <th>Curso</th>
                <th>Fecha Matricula</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>

        <tbody class="table-group-divider fw-light ">
            @foreach($matriculas as $m)
            <tr>
                <th class="fw-medium ">{{$m->id}}</th>
                <th class="fw-medium ">{{$m->primernombre.' '.$m->segundonombre}}</th>
                <th class="fw-medium ">{{$m->nombre}}</th>
                <th class="fw-medium ">{{$m->fecha_matricula}}</th>

                <th class="text-center d-flex gap-4 justify-content-center ">
                    <a href="/matricula/{{$m->id}}/edit" class="btn btn-primary  text-light">Editar</a>
                    <form action=" {{route('matricula_delete')}} " method="POST">
                        @csrf
                        @method('Delete')
                        <input type="hidden" name="id" value="{{$m->MatriculaId}}">
                        <button type="submit" class="btn btn-warning">Eliminar</button>

                    </form>
                </th>

            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection