@extends('app')

@section('content')

<form action="{{route('inscripciones.store')}}" method="POST" autocomplete="off" >
    <h1>
        Creando un Inscripción
    </h1>
    <label>
        ID Busqueda: 
        <br>
        <input type="text" id="idBusqueda" name="idBusqueda" value="{{$idBusqueda}}" readonly>
        <br>
    </label>
    <label>
        Apellido: 
        <br>
        <input type="text" id="apellido" name="apellido" value="{{old('apellido')}}">
        <br>
    </label>
    @error('apellido')
    <br>
        <small>{{$message}}</small>
    <br>
    @enderror
    <label>
        Nombre: 
        <br>
        <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}">
        <br>
    </label>
    
    @error('nombre')
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