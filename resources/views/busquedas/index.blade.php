@extends('app')

@section('content')

<h1 class="text-primary">Lista de Busquedas</h1>

<table class="table table-bordered" id="tableBusquedas">
  <thead>
    <tr>
        <th class="text-center">Id Busqueda</th>
        <th class="text-center">Id rubro</th>
        <th class="text-center">Empresa</th>
        <th class="text-center">Título</th>
        <th class="text-center">Descripción</th>
        <th class="text-center"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($colBusquedas as $busqueda)
        <tr>
            <td class="text-center">{{ $busqueda->idBusqueda}}</td>
            <td class="text-center">
              <a href="{{ route('rubros.show', $busqueda->idRubro) }}">{{$busqueda->idRubro}}</a>
            </td>
            <td class="text-center">{{ $busqueda->empresa}}</td>
            <td class="text-center">{{ $busqueda->titulo}}</td>
            <td class="text-center">{{ $busqueda->descripcion }}</td>
            <td class="text-center">
                <a href="{{ route('busquedas.show', $busqueda->idBusqueda) }}" class="btn btn-info">Ver Busqueda</a>
            </td>
        </tr>
    @endforeach
  </tbody>

</table>

@stop