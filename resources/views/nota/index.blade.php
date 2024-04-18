@extends('layouts.principal')

@section('hijos')

<h1 class="bg-body-secondary text-center p-3">Modulo de Personas</h1>
<div class="container mt-4">
    <a href="/nota/create/{{$alumno->idalumno}}" class="btn btn-primary">Guardar nota</a>

    <table class=" mt-3 table table-striped table-hover table-borderless  align-middle">
        <thead class="table-light bg-primary ">
            <tr>
                <th>ID</th>
                <th>Identidad</th>
                <th>Nota</th>
                <th>Id clase</th>
                <th>Id seccion</th>
                <th class="text-center ">Acciones</th>
            </tr>
        </thead>


        <tbody class="table-group-divider fw-light ">
            @foreach($notas as $nota)
            @if($nota->idalumno==$alumno->idalumno)
            <tr>
                <th class="fw-medium ">{{$nota->id}}</th>
                <th class="fw-medium ">{{$nota->idalumno}}</th>
                <th class="fw-medium ">{{$nota->nota}}</th>
                <th class="fw-medium ">{{$nota->idclase}}</th>
                <th class="fw-medium ">{{$nota->idseccion}}</th>
                <td class="text-center d-flex gap-4 justify-content-center ">

                    <form action="/nota/{{$nota->id}}" method="POST">
                        @csrf
                        @method('Delete')
                        <button type="submit" class="btn btn-warning btn-table">Eliminar</button>
                    </form>
                    <a href="/nota/{{$nota->id}}/edit" class="btn btn-info btn-table">Editar</a>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
</div>


</table>
@endsection