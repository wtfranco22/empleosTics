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
});

/*---------------------------    R    U    B    R    O    S    -----------------------------*/

Route::get('rubros/crearBusqueda/{idRubro}', [RubroController::class,'crearBusqueda'])->name('rubros.crearBusqueda');

Route::get('rubros/nombre',[RubroController::class,'buscarRubros'])->name('rubros.buscarRubros');

Route::get('rubros/busquedas/{idrubro}', [RubroController::class,'busquedas'])->name('rubros.busquedas');

Route::resource('rubros', RubroController::class);



/*---------------------    B    U    S    Q    U    E    D    A    S    --------------------*/

Route::get('busquedas/crearInscripcion/{idBusqueda}', [BusquedaController::class,'crearInscripcion'])->name('busquedas.crearInscripcion');

Route::get('busquedas/inscripciones/{idBusqueda}', [BusquedaController::class,'inscripciones'])->name('busquedas.inscripciones');

Route::resource('busquedas',BusquedaController::class);



/*------------------  I   N   S   C   R   I   P   C   I   O   N   E   S   ------------------*/

Route::resource('inscripciones', InscripcionController::class);