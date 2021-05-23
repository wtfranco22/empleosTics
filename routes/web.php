<?php

use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\RubroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

/*---------------------------    R    U    B    R    O    S    -----------------------------*/
//en la URL se mostrara el id del Objeto, la arquitectura del modelo presta su key para la url, podemos modificarlo mas adelante
//mostrando no solamente el id del Objeto sino mostrando el nombre del Objeto
//mas que la id, pueden recibir y enviar Objetos los metodos, declaramos la clase del objeto y sabe que debe ir al id

Route::get('rubros/crearBusqueda/{rubro}', [RubroController::class, 'crearBusqueda'])->name('rubros.crearBusqueda');

Route::get('rubros/nombre', [RubroController::class, 'buscarRubros'])->name('rubros.buscarRubros');

Route::get('rubros/busquedas/{rubro}', [RubroController::class, 'busquedas'])->name('rubros.busquedas');

Route::resource('rubros', RubroController::class);



/*---------------------    B    U    S    Q    U    E    D    A    S    --------------------*/

Route::get('busquedas/crearInscripcion/{busqueda}', [BusquedaController::class, 'crearInscripcion'])->name('busquedas.crearInscripcion');

Route::get('busquedas/inscripciones/{busqueda}', [BusquedaController::class, 'inscripciones'])->name('busquedas.inscripciones');

Route::resource('busquedas', BusquedaController::class);



/*------------------  I   N   S   C   R   I   P   C   I   O   N   E   S   ------------------*/

Route::resource('inscripciones', InscripcionController::class);
