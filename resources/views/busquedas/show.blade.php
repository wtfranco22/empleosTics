@extends('app')

@section('content')

<h1>
    Busqueda número {{ $busqueda->idBusqueda }}
</h1>

<p> ID Busqueda: {{ $busqueda->idBusqueda }} </p>
<p> ID Rubro: <a href="{{ route('rubros.show',$busqueda->idRubro) }}"> {{$busqueda->idRubro}}</a> </p>
<p> Empresa: {{ $busqueda->empresa }} </p>
<p> Título: {{ $busqueda->titulo }} </p>
<p> Descripción: {{ $busqueda->descripcion }} </p>

<a href=" {{ route('busquedas.index') }} ">Volver al inicio</a>
<a href=" {{ route('busquedas.show',$busqueda->idBusqueda) }} ">Recargar</a>

@stop