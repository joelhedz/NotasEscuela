@extends('layouts.principal')

@section('hijos')

<main>
    <h1 class="bg-body-secondary text-center p-3">Modulo Docentes</h1>
    <section class="container mt-4 ">
        <a href="/docente/create" class="btn btn-primary">Registrar Docente</a>

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
                        <th>Nombramiento</th>
                        <th class="text-center ">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider fw-light ">
                    @foreach ($docente as $data)
                    <tr>
                        <th class="fw-medium ">{{$data->id}}</th>
                        <th class="fw-medium ">{{$data->identidad}}</th>
                        <th class="fw-medium ">{{$data->primerNombre.' '.$data->apellido}}</th>
                        <th class="fw-medium ">{{$data->tipoNombramiento}}</th>

                        <th class="text-center d-flex gap-4 justify-content-center ">
                            <a href="/docente/{{$data->id}}/edit" class="btn btn-warning">Editar</a>
                            <button type="button" class="btn btn-danger eliminar" data-id="{{$data->id}}" data-nombre="{{$data->primerNombre}}" data-bs-toggle="modal" data-bs-target="#exampleModal" name="">
                                Eliminar
                            </button>

                        </th>
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </section>
    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Desea Eliminar a <span id="nombre"></span></h1>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form id="Eliminar" action="formEliminar" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" value="Eliminar">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.eliminar').forEach(button => {
            button.addEventListener('click', function() {
                // Obtenemos el nombre y id del empleado desde el atributo de datos
                const id = this.getAttribute('data-id');
                const nombre = this.getAttribute('data-nombre');
                // Mostramos el nombre del empleado en el modal
                document.getElementById('nombre').innerText = nombre;
                document.getElementById('Eliminar').setAttribute('action', '/docente/' + id)
            });
        });
    </script>


</main>



@endsection