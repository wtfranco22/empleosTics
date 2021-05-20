@extends('app')

@section('content')

<h1 class="text-primary">Lista de Rubros</h1>

<table class="table table-bordered" id="tableRubros">
  <thead>
    <tr>
        <th class="text-center">Descripción</th>
        <th class="text-center">Rubro</th>
        <th class="text-center">Modificar</th>
        <th class="text-center">Ver Busquedas</th>
    </tr>
  </thead>
  <tbody>
    @foreach($colRubros as $rubro)
        <tr>
            <td class="text-center">{{ $rubro->descripcion }}</td>
            <td class="text-center">
              <a href=" {{ route('rubros.create',$rubro->idRubro) }} ">Crear</a>
            </td>
            <td class="text-center">
              <a href="{{ route('rubros.show',$rubro->idRubro) }}">Modificar</a>
          </td>
            <td class="text-center">
                <a href="{{ route('rubros.busquedas',$rubro->idRubro) }}">Busquedas</a>
            </td>
        </tr>
    @endforeach
    <tfoot>
      <tr>
        <td colspan="4">
        <form class="navbar-form navbar-right" method="GET" action="{{route('rubros.buscarRubros')}}" autocomplete="off">
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Buscar..." value="">
          @csrf
        </form>
        </td>
      </tr>
    </tfoot>
  </tbody>
</table>

@stop