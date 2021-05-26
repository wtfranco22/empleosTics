<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInscripcion;
use App\Models\Inscripcion;

class InscripcionController extends Controller
{
    /**
     * Siempre vamos a utilizar el index de un controlador para mostrar todos sus objetos por el momento
     */
    public function index()
    {
        $inscripciones = Inscripcion::get();
        return view('inscripciones.index')->with('colInscripciones', $inscripciones);
    }
    /**
     * Siempre para manejar las verificaciones vamos a utilizar StoreNombreObjeto
     * Ya que sera donde veremos en detalle los datos del fomulario y si esta todo OK ingresamos al metodo store
     * para poder agregar el nuevo objeto al almacenamiento(store) con sus respectivos campos y
     * por ultimos mostramos al usuario como quedo el nuevo registro
     */
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
    /**
     * Siempre en el metodo show vamos a mostrar al objeto con sus datos,
     * El parametro esta listo tanto para recibir solo un id como un objeto
     * Eloquent al tener declarado la clase del objeto junto con su id/objeto, 
     * le es suficiente para darle a la variable sus valores
     */
    public function show(Inscripcion $inscripcione)
    {
        return view('inscripciones.show')->with('inscripcion', $inscripcione);
    }
    /**
     * Siempre en update vamos a actualizar un objeto, cambiar los valores de un objeto ya existentes
     * StoreRubro verificara si estan todos los datos correctos para poder realizar el cambio de datos y luego de ser asi
     * obtenemos el id/objeto por parametro para modificar sus valores y devolvemos al usuario como quedo actualizado ese objeto
     */
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
    /**
     * Siempre vamos a eliminar al objeto mediante este metodo
     */
    public function destroy(Inscripcion $inscripcione)
    {
        $inscripcione->delete();
        return redirect()->route('routes.index');
    }
    /**
     * Siempre vamos a dirigir al objeto al formulario completado con sus valores para que sea modificado
     * El metodo edit espera una id/objeto para llenar en los campos del formulario a realizar la actualizacion
     */
    public function edit(Inscripcion $inscripcione)
    {
        return view('inscripciones.edit')->with('inscripcion', $inscripcione);
    }
}
