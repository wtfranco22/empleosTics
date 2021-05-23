<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInscripcion;
use App\Models\Inscripcion;

class InscripcionController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcion::get();
        return view('inscripciones.index')->with('colInscripciones', $inscripciones);
    }
    public function store(StoreInscripcion $request)
    {
        $inscripcion = Inscripcion::create([
            'idBusqueda' => $request->idBusqueda,
            'fecha' => date('Y-m-d'),
            'apellido' => $request->apellido,
            'nombre' => $request->nombre
        ]);
        return redirect()->route('inscripciones.show', $inscripcion);
    }
    public function show(Inscripcion $inscripcione)
    {
        return view('inscripciones.show')->with('inscripcion', $inscripcione);
    }
    public function update(StoreInscripcion $request, Inscripcion $inscripcione)
    {
        $inscripcione->update([
            'idRubro' => $request->idRubro,
            'fecha' => date('Y-m-d'),
            'apellido' => $request->apellido,
            'nombre' => $request->nombre
        ]);
        return redirect()->route('inscripciones.show', $inscripcione);
    }
    public function destroy(Inscripcion $inscripcione)
    {
        $inscripcione->delete();
        return redirect()->route('routes.index');
    }
    public function edit(Inscripcion $inscripcione)
    {
        return view('inscripciones.edit')->with('inscripcion', $inscripcione);
    }
}
