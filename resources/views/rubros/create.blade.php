@extends('app')

@section('content')

<form action="{{route('rubros.store')}}" method="POST" autocomplete="off" >
    <h1>
        Creando un rubro
    </h1>
    <label>
        Descripción: 
        <br>
        <input type="text" id="descripcion" name="descripcion" value="{{old('descripcion')}}">
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
    @csrf

</form>
@stop