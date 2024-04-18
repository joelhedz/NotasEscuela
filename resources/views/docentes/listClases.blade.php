@extends('layouts.principal')

@section('hijos')

<main class="container">
    <h1 class="bg-body-secondary text-center fs-3 p-3">Lista de clases disponibles</h1>

    <table class="mt-4 table table-striped table-hover table-borderless  align-middle">
        <thead class="table-light bg-primary ">

            <tr>
                <th>Id</th>
                <th>Nombre Clase</th>
                <th class="text-center ">Acciones</th>
            </tr>
        </thead>

        <tbody class="table-group-divider fw-light ">
            @foreach ($clase as $item)
            <tr>
                <td class="fw-medium ">{{$item->id}}</td>
                <td class="fw-medium ">{{$item->nombre}}</td>

                <th class="text-center d-flex gap-4 justify-content-center ">
                    <form action="/asignar" method="POST">
                        @csrf
                        <input type="hidden" name="idDocente" value="{{$iddocente}}">
                        <input type="hidden" name="idClase" value="{{$item->id}}">
                        <button type="submit" class="btn btn-primary">Asignar</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>

    </table>
</main>

@endsection