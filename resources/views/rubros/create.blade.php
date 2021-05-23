@extends('layouts.app')
@section('content')

    <form action="{{ route('rubros.store') }}" method="POST" autocomplete="off">
        @csrf
        <h1>
            Creando un rubro
        </h1>
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