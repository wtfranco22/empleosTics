<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRubro;
use App\Models\Rubro;

class RubroController extends Controller
{
    /**
     * Siempre vamos a utilizar el index de un controlador para mostrar todos sus objetos por el momento
     */
    public function index()
    {
        $rubros = Rubro::get();
        return view('rubros.index')->with('colRubros', $rubros);
    }
    /**
     * Siempre para manejar las verificaciones vamos a utilizar StoreNombreObjeto
     * Ya que sera donde veremos en detalle los datos del fomulario y si esta todo OK ingresamos al metodo store
     * para poder agregar el nuevo objeto al almacenamiento(store) con sus respectivos campos y
     * por ultimos mostramos al usuario como quedo el nuevo registro
     */
    public function store(StoreRubro $request)
    {
        $objRubro = Rubro::create([
            'descripcion' => $request->descripcion
        ]);
        return redirect()->route('rubros.show', $objRubro);
    }
    /**
     * Simplemente nos dirigimos a este metodo para direccionar al formulario para crear un nuevo objeto
     * Realmente lo utilizariamos si dentro del metodo create enviamos datos adicionales al formulario
     */
    public function create()
    {
        return view('rubros.create');
    }
    /**
     * Siempre en el metodo show vamos a mostrar al objeto con sus datos,
     * El parametro esta listo tanto para recibir solo un id como un objeto
     * Eloquent al tener declarado la clase del objeto junto con su id/objeto, 
     * le es suficiente para darle a la variable sus valores
     */
    public function show(Rubro $rubro)
    {
        return view('rubros.show')->with('rubro', $rubro);
    }
    /**
     * Siempre en update vamos a actualizar un objeto, cambiar los valores de un objeto ya existentes
     * StoreRubro verificara si estan todos los datos correctos para poder realizar el cambio de datos y luego de ser asi
     * obtenemos el id/objeto por parametro para modificar sus valores y devolvemos al usuario como quedo actualizado ese objeto
     */
    public function update(StoreRubro $request, Rubro $rubro)
    {
        $rubro->update([
            'descripcion' => $request->descripcion
        ]);
        return view('rubros.show')->with('rubro', $rubro);
    }
    /**
     * Siempre vamos a eliminar al objeto mediante este metodo
     */
    public function destroy(Rubro $rubro)
    {
        $rubro->delete();
        return redirect()->route('rubros.index');
    }
    /**
     * Siempre vamos a dirigir al objeto al formulario completado con sus valores para que sea modificado
     * El metodo edit espera una id/objeto para llenar en los campos del formulario a realizar la actualizacion
     */
    public function edit(Rubro $rubro)
    {
        return view('rubros.edit')->with('rubro', $rubro);
    }
    /**
     * Como este objeto posee una coleccion de otro objeto, vamos a buscarlos a la base de datos,
     * El modelo del objeto ya debe ser responsable en la busqueda de sus colecciones y por eso,
     * Desde el objeto hacemos llamado a la busqueda de la coleccion que necesita
     */
    public function busquedas(Rubro $rubro)
    {
        return view('busquedas.index')->with('colBusquedas', $rubro->busquedas());
    }
    /**
     * Para simplificarle al usuario, esperamos un formulario con el nombre del objeto y le filtramos la
     * muestra de todos los objetos que existen con ese nombre de objeto
     */
    public function buscarRubros(StoreRubro $request)
    {
        $nombre = $request->nombre;
        $rubrosEncontrados = Rubro::where('descripcion', $nombre)->get();
        return view('rubros.index')->with('colRubros', $rubrosEncontrados);
    }
    /**
     * Como otro objeto depende de este para su creacion, hacemos al objeto responsable de crear al objeto dependiente
     * por eso mismo en el controlador del objeto dependiente no se encuentra el metodo create,
     * no es la unica forma de realizarlo, solo se utilizo para este caso
     */
    public function crearBusqueda(Rubro $rubro)
    {
        return view('busquedas.create')->with('rubro', $rubro);
    }
}
