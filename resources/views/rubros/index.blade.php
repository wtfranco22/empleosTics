@extends('app')

@section('content')

<h1 class="text-primary">Lista de Rubros</h1>

<table class="table table-bordered" id="tableRubros">
  <thead>
    <tr>
        <th class="text-center">Id Rubro</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Busquedas</th>
    </tr>
  </thead>
  <tbody>
    @foreach($colRubros as $rubro)
        <tr>
            <td class="text-center">{{ $rubro->idRubro}}</td>
            <td class="text-center">{{ $rubro->descripcion }}</td>
            <td class="text-center">
                <a href="{{ route('rubros.busquedas',$rubro->idRubro) }}" class="btn btn-info">Ver</a>
            </td>
        </tr>
    @endforeach
    <tfoot>
      <tr>
        <td colspan="3">
        <form class="navbar-form navbar-right" method="POST" action="/rubros" autocomplete="off">
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Buscar..." value="">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
        </td>
      </tr>
    </tfoot>
  </tbody>
</table>

@stop