@extends('layouts.app')
@section('content')

    <form action="{{ route('inscripciones.store') }}" method="POST" autocomplete="off">
        @csrf
        <h1>
            Creando un Inscripción en: {{ $busqueda->empresa }}
        </h1>
        <label>
            ID Busqueda:
            <br>
            <input type="text" id="idBusqueda" name="idBusqueda" value="{{ $busqueda->idBusqueda }}" readonly>
        </label>
        <br>
        <label>
            Apellido:
            <br>
            <input type="text" id="apellido" name="apellido" value="{{ old('apellido') }}">
        </label>
        <br>
        @error('apellido')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label>
            Nombre:
            <br>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
        </label>
        <br>
        @error('nombre')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label>
            <input type="submit" value="enviar">
        </label>
    </form>

@stop
