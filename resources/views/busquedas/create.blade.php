@extends('app')

@section('content')

<form action="{{route('busquedas.store')}}" method="POST" autocomplete="off" >
    <h1>
        Creando una Busqueda
    </h1>
    @csrf
    <label>
        ID Rubro: 
        <br>
        <input type="text" id="idRubro" name="idRubro" value="{{$idRubro}}" readonly>
        <br>
    </label>
    <label>
        Empresa: 
        <br>
        <input type="text" id="empresa" name="empresa" value="{{old('empresa')}}">
        <br>
    </label>
    
    @error('empresa')
    <br>
        <small>{{$message}}</small>
    <br>
    @enderror

    <label>
        Titulo: 
        <br>
        <input type="text" id="titulo" name="titulo" value="{{old('titulo')}}">
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
    

</form>
@stop