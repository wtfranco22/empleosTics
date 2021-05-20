<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
/*{
    Depende de un rubro la busqueda
    public function create($idRubro){
        echo"llego";
    }
}*/
    public function show($id){
        $objBusqueda = Busqueda::find($id);
        return view('busquedas.show')->with('busqueda',$objBusqueda);
    }
    public function update(StoreBusqueda $request, $id){
        $objBusqueda = Busqueda::find($id);
        $objBusqueda->update([
            'idRubro'=>$request->idRubro,
            'empresa'=>$request->empresa,
            'titulo'=>$request->titulo,
            'descripcion'=>$request->descripcion
        ]);
        return redirect()->route('busquedas.show',$objBusqueda);
    }
    public function destroy($id){ 
        $objBusqueda = Busqueda::find($id);
        $objBusqueda->delete();
        return redirect()->route('busquedas.index');
    }
    public function edit($id){
        $objBusqueda = Busqueda::find($id);
        return view('busquedas.edit')->with('busqueda',$objBusqueda);
    }
    public function inscripciones($idBusqueda){
        $colInscripciones = DB::table('inscripcion')->where('idBusqueda','=',$idBusqueda)->get();
        return view('inscripciones.index')->with('colInscripciones',$colInscripciones);
    }
    public function crearInscripcion($idBusqueda){
        return view('inscripciones.create')->with('idBusqueda',$idBusqueda);
    }
}
