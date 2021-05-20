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
/*{
    Depende de la busqueda la inscripcion, no puede crearse sola
    public function create(){
        return view('inscripciones.create');
    }
}*/
    public function show($id){
        $objInscripcion = Inscripcion::find($id);
        return view('inscripciones.show')->with('inscripcion',$objInscripcion);
    }
    public function update(StoreInscripcion $request, $id){
        $objInscripcion= Inscripcion::find($id);
        $objInscripcion->update([
            'idRubro'=>$request->idRubro,
            'fecha'=>date('Y-m-d'),
            'apellido'=>$request->apellido,
            'nombre'=>$request->nombre
        ]);
        return redirect()->route('inscripciones.show',$objInscripcion);
    }    
    public function destroy($id){
        $objInscripcion=Inscripcion::find($id);
        $objInscripcion->delete();
        return redirect()->route('routes.index');
    }
    public function edit($id){
        $objInscripcion = Inscripcion::find($id);
        return view('inscripciones.edit')->with('inscripcion',$objInscripcion);
    }
}
