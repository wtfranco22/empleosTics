@extends('layouts.app')
@section('content')

    <form action="{{ route('busquedas.update', $busqueda) }}" method="POST" autocomplete="off">
        @csrf
        <h1>
            Modificando una Busqueda
        </h1>
        @method('put')
        <label>
            ID Rubro:
            <br>
            <input type="text" id="idRubro" name="idRubro" value="{{ $busqueda->idRubro }}" readonly>
        </label>
        <br>
        <label>
            Empresa:
            <br>
            <input type="text" id="empresa" name="empresa" value="{{ old('empresa', $busqueda->empresa) }}">
        </label>
        <br>
        @error('empresa')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label>
            titulo:
            <br>
            <input type="text" id="titulo" name="titulo" value="{{ old('titulo', $busqueda->titulo) }}">
        </label>
        <br>
        @error('titulo')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label>
            Descripción:
            <br>
            <input type="text" id="descripcion" name="descripcion"
                value="{{ old('descripcion', $busqueda->descripcion) }}">
        </label>
        <br>
        @error('descripcion')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label>
            <input type="submit" value="enviar">
        </label>
    </form>

@stop