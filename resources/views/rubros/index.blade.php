@extends('layouts.app')
@section('content')

    <h1 class="text-primary">Lista de Rubros</h1>
    <table class="table table-bordered" id="tableRubros">
        <thead>
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Observar</th>
                <th class="text-center">Rubro</th>
                <th class="text-center">Ver Busquedas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colRubros as $rubro)
                <tr>
                    <td class="text-center">{{ $rubro->idRubro }}</td>
                    <td class="text-center">{{ $rubro->descripcion }}</td>
                    <td class="text-center">
                        <a href="{{ route('rubros.show', $rubro) }}">Ver</a>
                    </td>
                    <td class="text-center">
                        <a href=" {{ route('rubros.create') }} ">Crear</a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('rubros.busquedas', $rubro) }}">Busquedas</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">

                    <form class="navbar-form navbar-right" method="GET" action="{{ route('rubros.buscarRubros') }}"
                        autocomplete="off">
                        @csrf
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Buscar..."
                            value="">
                    </form>

                </td>
            </tr>
        </tfoot>
    </table>

@stop