@extends('layouts.principal')
@section('hijos')

<h1 class="bg-body-secondary text-center fs-3 p-3 ">Registrar Clases</h1>
<div class="container">
    <a href="clase/create" class="btn btn-primary mt-4">Registrar clase</a>

    <table class="table table-striped table-hover table-borderless  align-middle mt-3 ">
        <thead class="table-light bg-primary ">
            <tr>
                <th>ID</th>
                <th>IdClase</th>
                <th>Nombre</th>
                <th>Seccion</th>
                <th class="text-center ">Acciones</th>
            </tr>
        </thead>

        <tbody class="table-group-divider fw-light ">
            @foreach($clases as $clase)
            <tr>
                <th class="fw-medium ">{{$clase->id}}</th>
                <th class="fw-medium ">{{$clase->seccion}}</th>
                <th class="fw-medium ">{{$clase->nombre}}</th>
                <th class="fw-medium ">{{$clase->seccion}}</th>
                <th class="text-center d-flex gap-4 justify-content-center ">
                    <a href="/clase/{{$clase->id}}/edit" class="btn btn-primary">Editar</a>

                    <form action=" /clase/{{$clase->id}}" method="POST">
                        @csrf
                        @method('Delete')
                        <button type="submit" class="btn btn-danger ">Eliminar</button>
                    </form>

                </th>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection