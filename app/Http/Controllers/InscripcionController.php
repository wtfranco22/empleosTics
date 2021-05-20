<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInscripcion;
use App\Models\Inscripcion;

class InscripcionController extends Controller
{
    public function index(){
        $inscripciones = Inscripcion::get();
        return view('inscripciones.index')->with('colInscripciones',$inscripciones);
    }
    public function store(StoreInscripcion $request){
        $objInscripcion=Inscripcion::create([
            'idBusqueda'=>$request->idBusqueda,
            'fecha'=>date('Y-m-d'),
            'apellido'=>$request->apellido,
            'nombre'=>$request->nombre
        ]);
        return redirect()->route('inscripciones.show',$objInscripcion);
    }
    public function create(){
        return view('inscripciones.create');
    }
    public function show(Inscripcion $objInscripcion){
        return view('inscripciones.show')->with('inscripcion',$objInscripcion);
    }
    public function update(StoreInscripcion $request, Inscripcion $objInscripcion){
        $objInscripcion->update([
            'idRubro'=>$request->idRubro,
            'fecha'=>date('Y-m-d'),
            'apellido'=>$request->apellido,
            'nombre'=>$request->nombre
        ]);
        return redirect()->route('inscripciones.show',$objInscripcion);
    }    
    public function destroy(Inscripcion $objInscripcion){
        $objInscripcion->delete();
        return redirect()->route('routes.index');
    }
    public function edit(Inscripcion $objInscripcion){
        return view('inscripciones.edit')->with('inscripcion',$objInscripcion);
    }
}
