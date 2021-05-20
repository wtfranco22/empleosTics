@extends('app')

@section('content')

<h1>
    Rubro número {{ $rubro->idRubro }}
</h1>

<p> ID rubro: {{ $rubro->idRubro }} </p>
<p> Descripción: {{ $rubro->descripcion }} </p>

<a href=" {{ route('rubros.index') }} ">Volver al inicio</a>
<a href=" {{ route('rubros.show',$rubro->idRubro) }} ">Recargar</a>

@stop