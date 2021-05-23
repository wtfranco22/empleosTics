@extends('layouts.app')
@section('content')

    <form action="{{ route('busquedas.store') }}" method="POST" autocomplete="off">
        @csrf
        <h1>
            Creando una Busqueda de: {{ $rubro->descripcion }}
        </h1>
        <input type="hidden" id="idRubro" name="idRubro" value="{{ $rubro->idRubro }}" readonly>
        <label>
            Empresa:
            <br>
            <input type="text" id="empresa" name="empresa" value="{{ old('empresa') }}">
        </label>
        <br>
        @error('empresa')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label>
            Titulo:
            <br>
            <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}">
        </label>
        <br>
        @error('titulo')
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label>
            Descripción:
            <br>
            <input type="text" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
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