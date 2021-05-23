@extends('layouts.app')
@section('content')

    <h1>
        Rubro número {{ $rubro->idRubro }}
    </h1>
    <p>
        ID rubro: {{ $rubro->idRubro }}
    </p>
    <p>
        Descripción: {{ $rubro->descripcion }}
    </p>
    <a href=" {{ route('rubros.index') }} ">Volver al inicio</a>
    <br>
    <a href=" {{ route('rubros.edit', $rubro) }} ">Editar</a>
    <br>
    <a href=" {{ route('rubros.crearBusqueda', $rubro) }} ">Crear Busqueda</a>

    <form action="{{ route('rubros.destroy', $rubro) }}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="Eliminar">
    </form>

@stop