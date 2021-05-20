@extends('app')

@section('content')

<form action="{{route('inscripciones.update',$inscripcion->idInscripcion)}}" method="POST" autocomplete="off" >
    @csrf
    @method('put')
    <h1>
        Modificando una Inscripción
    </h1>
    <label>
        ID Busqueda: 
        <br>
        <input type="text" id="idBusqueda" name="idBusqueda" value="{{$inscripcion->idBusqueda}}" readonly>
        <br>
    </label>
    <label>
        Apellido: 
        <br>
        <input type="text" id="apellido" name="apellido" value="{{old('apellido',$inscripcion->apellido)}}">
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
        <input type="text" id="nombre" name="nombre" value="{{old('nombre',$inscripcion->nombre)}}">
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

</form>
@stop