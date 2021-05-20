@extends('app')

@section('content')

<h1>
    Busqueda número {{ $busqueda->idBusqueda }}
</h1>

<p> ID Busqueda: {{ $busqueda->idBusqueda }} </p>
<p> ID Rubro: <a href="{{ route('rubros.show',$busqueda->idRubro) }}"> {{$busqueda->idRubro}}</a> </p>
<p> Empresa: {{ $busqueda->empresa }} </p>
<p> Título: {{ $busqueda->titulo }} </p>
<p> Descripción: {{ $busqueda->descripcion }}</p>

<a href=" {{ route('busquedas.index') }} ">Volver al inicio</a>
<br>
<a href=" {{ route('busquedas.edit',$busqueda->idBusqueda) }} ">Editar</a>
<br>
<form action="{{route('busquedas.destroy',$busqueda->idBusqueda)}}" method="POST">
    @csrf
    @method('delete')
    <input type="submit" value="Eliminar">
</form>
@stop