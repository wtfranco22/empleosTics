<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRubro;
use App\Models\Busqueda;
use App\Models\Rubro;

class RubroController extends Controller
{
    public function index()
    {
        $rubros = Rubro::get();
        return view('rubros.index')->with('colRubros', $rubros);
    }
    public function store(StoreRubro $request)
    {
        $objRubro = Rubro::create([
            'descripcion' => $request->descripcion
        ]);
        return redirect()->route('rubros.show', $objRubro);
    }
    public function create()
    {
        return view('rubros.create');
    }
    public function show(Rubro $rubro)
    {
        return view('rubros.show')->with('rubro', $rubro);
    }
    public function update(StoreRubro $request, Rubro $rubro)
    {
        $rubro->update([
            'descripcion' => $request->descripcion
        ]);
        return view('rubros.show')->with('rubro', $rubro);
    }
    public function destroy(Rubro $rubro)
    {
        $rubro->delete();
        return redirect()->route('rubros.index');
    }
    public function edit(Rubro $rubro)
    {
        return view('rubros.edit')->with('rubro', $rubro);
    }
    public function busquedas(Rubro $rubro)
    {
        $colBusquedas = Busqueda::where('idRubro', $rubro->idRubro)->get();
        return view('busquedas.index')->with('colBusquedas', $colBusquedas);
    }
    public function buscarRubros(StoreRubro $request)
    {
        $nombre = $request->nombre;
        $rubrosEncontrados = Rubro::where('descripcion', $nombre)->get();
        return view('rubros.index')->with('colRubros', $rubrosEncontrados);
    }
    public function crearBusqueda(Rubro $rubro)
    {
        return view('busquedas.create')->with('rubro', $rubro);
    }
}
