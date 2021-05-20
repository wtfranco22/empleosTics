@extends('app')

@section('content')

<h1 class="text-primary">Lista de Busquedas</h1>

<table class="table table-bordered" id="tableBusquedas">
  <thead>
    <tr>
        <th class="text-center">Empresa</th>
        <th class="text-center">Modificar</th>
        <th class="text-center">Inscriptos</th>
    </tr>
  </thead>
  <tbody>
    @foreach($colBusquedas as $busqueda)
        <tr>
            <td class="text-center">{{ $busqueda->empresa}}</td>
            <td class="text-center">
                <a href="{{ route('busquedas.show', $busqueda->idBusqueda) }}">Modificar</a>
            </td>
            <td class="text-center">
              <a href="{{ route('busquedas.inscripciones',$busqueda->idBusqueda) }}">Inscripciones</a>
          </td>
        </tr>
    @endforeach
  </tbody>

</table>

@stop