<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusqueda;
use App\Models\Busqueda;

class BusquedaController extends Controller
{
    /**
     * Siempre vamos a utilizar el index de un controlador para mostrar todos sus objetos por el momento
     */
    public function index()
    {
        $busquedas = Busqueda::get();
        return view('busquedas.index')->with('colBusquedas', $busquedas);
    }
    /**
     * Siempre para manejar las verificaciones vamos a utilizar StoreNombreObjeto
     * Ya que sera donde veremos en detalle los datos del fomulario y si esta todo OK ingresamos al metodo store
     * para poder agregar el nuevo objeto al almacenamiento(store) con sus respectivos campos y
     * por ultimos mostramos al usuario como quedo el nuevo registro
     */
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
    /**
     * Siempre en el metodo show vamos a mostrar al objeto con sus datos,
     * El parametro esta listo tanto para recibir solo un id como un objeto
     * Eloquent al tener declarado la clase del objeto junto con su id/objeto, 
     * le es suficiente para darle a la variable sus valores
     */
    public function show(Busqueda $busqueda)
    {
        return view('busquedas.show')->with('busqueda', $busqueda);
    }
    /**
     * Siempre en update vamos a actualizar un objeto, cambiar los valores de un objeto ya existentes
     * StoreRubro verificara si estan todos los datos correctos para poder realizar el cambio de datos y luego de ser asi
     * obtenemos el id/objeto por parametro para modificar sus valores y devolvemos al usuario como quedo actualizado ese objeto
     */
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
    /**
     * Siempre vamos a eliminar al objeto mediante este metodo
     */
    public function destroy(Busqueda $busqueda)
    {
        $busqueda->delete();
        return redirect()->route('busquedas.index');
    }
    /**
     * Siempre vamos a dirigir al objeto al formulario completado con sus valores para que sea modificado
     * El metodo edit espera una id/objeto para llenar en los campos del formulario a realizar la actualizacion
     */
    public function edit(Busqueda $busqueda)
    {
        return view('busquedas.edit')->with('busqueda', $busqueda);
    }
    /**
     * Como este objeto posee una coleccion de otro objeto, vamos a buscarlos a la base de datos,
     * El modelo del objeto ya debe ser responsable en la busqueda de sus colecciones y por eso,
     * Desde el objeto hacemos llamado a la busqueda de la coleccion que necesita
     */
    public function inscripciones(Busqueda $busqueda)
    {
        return view('inscripciones.index')->with('colInscripciones', $busqueda->inscripciones());
    }
    /**
     * Como otro objeto depende de este para su creacion, hacemos al objeto responsable de crear al objeto dependiente
     * por eso mismo en el controlador del objeto dependiente no se encuentra el metodo create,
     * no es la unica forma de realizarlo, solo se utilizo para este caso
     */
    public function crearInscripcion(Busqueda $busqueda)
    {
        return view('inscripciones.create')->with('busqueda', $busqueda);
    }
}
