@extends('layouts.principal')

@section('hijos')

<main>
    <h1 class="bg-body-secondary text-center p-3">Asignar Clases Docente</h1>
    <section class="container mt-4 ">
        <div class="mt-3">
            <table class="table table-striped table-hover table-borderless  align-middle">
                <thead class="table-light bg-primary ">
                    <caption>
                        Docentes Registrados
                    </caption>
                    <tr>
                        <th>Id</th>
                        <th>Identidad</th>
                        <th>Nombre Completo</th>

                        <th class="text-center ">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider fw-light ">
                    @foreach ($docente as $data)
                    <tr>
                        <th class="fw-medium ">{{$data->id}}</th>
                        <th class="fw-medium ">{{$data->identidad}}</th>
                        <th class="fw-medium ">{{$data->primerNombre.' '.$data->apellido}}</th>


                        <th class="text-center d-flex gap-4 justify-content-center ">
                            <a href="/asignar/{{$data->id}}" class="btn btn-primary">Asignar</a>
                            <a href="/asignar/{{$data->id}}/edit" class="btn btn-success">Ver Asignaciones</a>
                        </th>
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </section>
    </div>



</main>



@endsection