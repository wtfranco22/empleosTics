@extends('app')

@section('content')

<form action="{{route('busquedas.update',$busqueda->idBusqueda)}}" method="POST" autocomplete="off" >
    <h1>
        Modificando una Busqueda
    </h1>
    @csrf
    @method('put')
    <label>
        ID Rubro: 
        <br>
        <input type="text" id="idRubro" name="idRubro" value="{{$busqueda->idRubro}}" readonly>
        <br>
    </label>
    <label>
        Empresa: 
        <br>
        <input type="text" id="empresa" name="empresa" value="{{old('empresa',$busqueda->empresa)}}">
        <br>
    </label>
    @error('empresa')
    <br>
        <small>{{$message}}</small>
    <br>
    @enderror
    <label>
        titulo: 
        <br>
        <input type="text" id="titulo" name="titulo" value="{{old('titulo',$busqueda->titulo)}}">
        <br>
    </label>
    
    @error('titulo')
    <br>
        <small>{{$message}}</small>
    <br>
    @enderror
    <label>
        Descripción: 
        <br>
        <input type="text" id="descripcion" name="descripcion" value="{{old('descripcion',$busqueda->descripcion)}}">
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