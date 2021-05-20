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
<br>
<a href=" {{ route('inscripciones.edit',$inscripcion->idInscripcion) }} ">Editar</a>
<br>
<a href=" {{ route('inscripciones.create') }} ">Crear</a>
<form action="{{route('inscripciones.destroy',$inscripcion->idInscripcion)}}" method="POST">
    @csrf
    @method('delete')
    <input type="submit" value="Eliminar">
</form>
@stop