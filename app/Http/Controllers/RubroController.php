<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRubro;
use App\Models\Rubro;
use Illuminate\Support\Facades\Request;

class RubroController extends Controller
{
    public function index(){
        $rubros = Rubro::get();
        return view('rubros.index')->with('colRubros',$rubros);
    }
    public function store(StoreRubro $request){
        $objRubro=Rubro::create([
            'descripcion'=>$request->descripcion
        ]);
        return redirect()->route('rubros.show',$objRubro);
    }
    public function create(){
        return view('rubros.create');
    }
    public function show($id){
        $objRubro = Rubro::find($id);
        return view('rubros.show')->with('rubro',$objRubro);
    }
    public function update(StoreRubro $request,$id){
        $objRubro= Rubro::find($id);
        $objRubro->update([
            'descripcion'=>$request->descripcion
        ]);
        return redirect()->route('rubros.show',$objRubro);
    }
    public function destroy($id){
        $objRubro = Rubro::find($id);
        $objRubro->delete();
        return redirect()->route('rubros.index');
    }
    public function edit($id){
        $objRubro= Rubro::find($id);
        return view('rubros.edit')->with('rubro',$objRubro);
    }
    public function busquedas($idrubro){
        $colBusquedas = DB::table('busqueda')->where('idRubro','=',$idrubro)->get();
        return view('busquedas.index')->with('colBusquedas',$colBusquedas);
    }
    public function procesarRubro(){
        $nombreRubro=Request::input('nombre');
        return redirect()->route('rubros.nombre',$nombreRubro);
    }
    public function buscarRubros($nombre){
        $rubrosEncontrados = DB::table('rubro')->where('descripcion','=',$nombre)->get();
        return view('rubros.index')->with('colRubros',$rubrosEncontrados);
    }
}
