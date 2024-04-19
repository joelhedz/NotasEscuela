@extends('layouts.principal')
@section('hijos')
<div class="container mt-5">
    <h1 class="mt-4">Crear Matrícula</h1>
    <div class="row">
        <div class="col">
            <form action="{{route('matricula_store')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="alumno" class="form-label">Alumno</label>
                    <select name="alumno" id="alumno" class="form-select">
                        <option selected disabled>Seleccione un alumno</option>
                        @foreach($alumno as $a)
                        <option value="{{$a->id}}">{{$a->primernombre}} {{$a->segundonombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="curso" class="form-label">Curso</label>
                    <select name="curso" id="curso" class="form-select">
                        <option selected disabled>Seleccione un curso</option>
                        @foreach($curso as $c)
                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection