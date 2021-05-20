<?php

use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\RubroController;
use App\Models\Busqueda;
use App\Models\Rubro;
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


Route::get('rubros/busquedas/{idrubro}', [RubroController::class,'busquedas'])->name('rubros.busquedas');

Route::get('rubros/nombre/{nombre}',[RubroController::class,'buscarRubros'])->name('rubros.nombre');

Route::resource('rubros', RubroController::class);

Route::post('rubros',[RubroController::class,'procesarRubro']);

Route::resource('busquedas',BusquedaController::class);

Route::resource('inscripciones', InscripcionController::class);