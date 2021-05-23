<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusqueda;
use App\Models\Busqueda;
use App\Models\Inscripcion;

class BusquedaController extends Controller
{
    public function index()
    {
        $busquedas = Busqueda::get();
        return view('busquedas.index')->with('colBusquedas', $busquedas);
    }
    public function store(StoreBusqueda $request)
    {
        $objBusqueda = Busqueda::create([
            'idRubro' => $request->idRubro,
            'empresa' => $request->empresa,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion
        ]);
        return redirect()->route('busquedas.show', $objBusqueda);
    }
    public function show(Busqueda $busqueda)
    {
        return view('busquedas.show')->with('busqueda', $busqueda);
    }
    public function update(StoreBusqueda $request, Busqueda $busqueda)
    {
        $busqueda->update([
            'idRubro' => $request->idRubro,
            'empresa' => $request->empresa,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion
        ]);
        return redirect()->route('busquedas.show', $busqueda);
    }
    public function destroy(Busqueda $busqueda)
    {
        $busqueda->delete();
        return redirect()->route('busquedas.index');
    }
    public function edit(Busqueda $busqueda)
    {
        return view('busquedas.edit')->with('busqueda', $busqueda);
    }
    public function inscripciones(Busqueda $busqueda)
    {
        $colInscripciones = Inscripcion::where('idBusqueda', $busqueda->idBusqueda)->get();
        return view('inscripciones.index')->with('colInscripciones', $colInscripciones);
    }
    public function crearInscripcion(Busqueda $busqueda)
    {
        return view('inscripciones.create')->with('busqueda', $busqueda);
    }
}
