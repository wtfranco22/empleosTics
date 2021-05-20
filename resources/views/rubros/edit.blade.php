@extends('app')

@section('content')

<form action="{{ route('rubros.update',$rubro->idRubro) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
    <h1>
        Modificando una rubro
    </h1>
    @csrf
    @method('put')
        Descripción: 
        <br>
        <input type="text" id="descripcion" name="descripcion" value="{{old('descripcion',$rubro->descripcion)}}">
        <br>
    </label>
    @error('descripcion')
    <br>
        <small>{{$message}}</small>
    <br>
    @enderror
    
    <label>
        <input type="submit" value="enviar">
    </label>
</form>
@stop