<?php

$action = isset($docente) ? true : false;
$title = $action ? 'Editar Docente' : 'Nuevo Docente';

?>
@extends('layouts.principal')

@section('hijos')
<main class="container">
    <h1 class="mt-4">{{$title}}</h1>
    <form class="mt-4" action="{{$action?'/docente/'.$docente->id:'/docente'}}" method="POST">
        @csrf
        @if($action)
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Id</label>
            <input type="number" name="idPersona" id="idPersona" class="form-control" value="{{$action?$docente->id:''}}" readonly>
        </div>
        @endif
        <div class="mb-3">
            <label for="">Identidad</label>
            <input type="text" name="identidad" id="identidad" class="form-control" value="{{$action ? $docente->identidad : ''}}" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 13)">

        </div>

        <div class="mb-3">
            <label for="">Primer Nombre</label>
            <input type="text" name="primerNombre" class="form-control" value="{{$action?$docente->primerNombre:''}}">
        </div>

        <div class="mb-3">
            <label for="">Segundo Nombre</label>
            <input type="text" name="segundoNombre" class="form-control" value="{{$action?$docente->segundoNombre:''}}">
        </div>

        <div>
            <label for="">Apellido</label>
            <input type="text" name="apellido" class="form-control" value="{{$action?$docente->apellido:''}}">
        </div>

        <div class="mb-3 mt-3">
            <label for="">Tipo de Nombramiento</label>
            <select name="tipoNombramiento" class="form-select ">
                <option value="">Seleccione</option>
                <option value="Permanente" {{$action && $docente->tipoNombramiento == 'Permanente' ? 'selected' : ''}}>Permanente</option>
                <option value="Provisional" {{$action && $docente->tipoNombramiento == 'Provisional' ? 'selected' : ''}}>Provisional</option>
                <option value="Tiempofijo" {{$action && $docente->tipoNombramiento == 'Tiempofijo' ? 'selected' : ''}}>Tiempo Fijo</option>

            </select>

        </div>


        <div class="mb-3 text-center my-5">
            <button type="submit" class="btn btn-primary w-25  ">Confirmar</button>

        </div>

    </form>


</main>
@endsection