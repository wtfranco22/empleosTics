@extends('layouts.app')
@section('content')

    <form action="{{ route('rubros.update', $rubro) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <h1>
            Modificando una rubro
        </h1>
        @method('put')
        Descripción:
        <br>
        <input type="text" id="descripcion" name="descripcion" value="{{ old('descripcion', $rubro->descripcion) }}">
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
