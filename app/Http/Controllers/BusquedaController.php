<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusqueda;
use App\Models\Busqueda;

class BusquedaController extends Controller
{
    public function index(){
        $busquedas = Busqueda::get();
        return view('busquedas.index')->with('colBusquedas',$busquedas);
    }
    public function store(StoreBusqueda $request){
        $objBusqueda=Busqueda::create([
            'idRubro'=>$request->idRubro,
            'empresa'=>$request->empresa,
            'titulo'=>$request->titulo,
            'descripcion'=>$request->descripcion
        ]);
        return redirect()->route('busquedas.show',$objBusqueda);
    }
    public function create(){
        return view('busquedas.crear');
    }
    public function show(Busqueda $objBusqueda){
        return view('busquedas.show')->with('busqueda',$objBusqueda);
    }
    public function update(StoreBusqueda $request, Busqueda $objBusqueda){
        $objBusqueda->update([
            'idRubro'=>$request->idRubro,
            'empresa'=>$request->empresa,
            'titulo'=>$request->titulo,
            'descripcion'=>$request->descripcion
        ]);
        return redirect()->route('busquedas.show',$objBusqueda);
    }
    public function destroy(Busqueda $objBusqueda){ 
        $objBusqueda->delete();
        return redirect()->route('busquedas.index');
    }
    public function edit(Busqueda $objBusqueda){
        return view('busquedas.edit')->with('busqueda',$objBusqueda);
    }
}
