@extends('layouts.app')
@section('content')

    <form action="{{ route('inscripciones.update', $inscripcion) }}" method="POST" autocomplete="off">
        @csrf
        @method('put')
        <h1>
            Modificando una Inscripción
        </h1>
        <br>
        <label>
            ID Busqueda:
            <br>
            <input type="text" id="idBusqueda" name="idBusqueda" value="{{ $inscripcion->idBusqueda }}" readonly>
        </label>
        <br>
        <label>
            Apellido:
            <br>
            <input type="text" id="apellido" name="apellido" value="{{ old('apellido', $inscripcion->apellido) }}">
        </label>
        <br>
        @error('apellido')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label>
            Nombre:
            <br>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $inscripcion->nombre) }}">
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