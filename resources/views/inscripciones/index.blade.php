@extends('app')

@section('content')

<h1 class="text-primary">Lista de Inscripciones</h1>

<table class="table table-bordered" id="tableInscripciones">
  <thead>
    <tr>
        <th class="text-center">Fecha</th>
        <th class="text-center">Apellido</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Modificar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($colInscripciones as $inscripcion)
        <tr>
            <td class="text-center">{{ $inscripcion->fecha }}</td>
            <td class="text-center">{{ $inscripcion->apellido }}</td>
            <td class="text-center">{{ $inscripcion->nombre }}</td>
            <td class="text-center">
                <a href="{{ route('inscripciones.show', $inscripcion->idInscripcion) }}">Modificar</a>
            </td>
        </tr>
    @endforeach
  </tbody>

</table>

@stop