@extends('layouts.principal')

@section('hijos')

<main class="container">
    <h1 class="bg-body-secondary text-center fs-3 p-3">Clases de {{$nombreDocente}}</h1>

    <table class="mt-4 table table-striped table-hover table-borderless  align-middle">
        <thead class="table-light bg-primary ">

            <tr>
                <th>Id</th>
                <th>Nombre Clase</th>
                <th class="text-center ">Acciones</th>
            </tr>
        </thead>

        <tbody class="table-group-divider fw-light ">
            @foreach ($datos as $item)
            <tr>
                <td class="fw-medium ">{{$item->idClase}}</td>
                <td class="fw-medium ">{{$item->nombre}}</td>

                <th class="text-center d-flex gap-4 justify-content-center ">
                    <form action="/asignar/{{$item->idDocente}}/{{$item->idClase}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Quitar Clase</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>

    </table>
</main>

@endsection