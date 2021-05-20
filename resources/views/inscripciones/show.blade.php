@extends('app')

@section('content')

<h1>
    Inscripcion número {{ $inscripcion->idInscripcion }}
</h1>

<p> ID Inscripcion: {{ $inscripcion->idInscripcion }} </p>
<p> ID Busqueda:<a href="{{ route('busquedas.show',$inscripcion->idBusqueda) }}"> {{$inscripcion->idBusqueda}}</a></p>
<p> Fecha: {{ $inscripcion->fecha }} </p>
<p> Apellido: {{ $inscripcion->apellido }} </p>
<p> Nombre: {{ $inscripcion->nombre }} </p>

<a href=" {{ route('inscripciones.index') }} ">Volver al inicio</a>
<a href=" {{ route('inscripciones.show',$inscripcion->idInscripcion) }} ">Recargar</a>

@stop