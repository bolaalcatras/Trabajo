<?php
use App\Http\Controllers\PqrsdController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\QualificationsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::controller(DateController::class)->gruop(function(){
     Route::get('bases', "paguna");
     Route::get('bases/ingrese', "pagdos");
     Route::get('bases/ingrese1', "pagtres");

});
*/

Route::get('/', function(){
    return view("c");
});


Route::get('cliente/inicio', [ClienteController::class, "inicio"])->name("cliente.inicio");
Route::get('cliente/anonima', [ClienteController::class, "formularioAnonimo"])->name("cliente.anonima");
Route::post('cliente/inicio', [ClienteController::class, "datos"]);
Route::get('cliente/create', [ClienteController::class,"datos"])->name("cliente.datos");
Route::post('cliente', [ClienteController::class,"store"])->name("cliente.store");


// // Ruta para mostrar el formulario de inicio para seleccionar si la PQRS es anónima o no
// Route::get('cliente/inicio', [ClientesController::class, "inicio"])->name("clientes.inicio");

// // Ruta para procesar la selección del usuario y redirigir al formulario correspondiente
// Route::post('cliente/seleccion', [ClientesController::class, "seleccion"])->name("clientes.seleccion");

// // Ruta para mostrar el formulario de ingreso de datos del cliente y PQRS no anónima
// Route::get('cliente/create', [ClientesController::class, "datos"])->name("clientes.create");

// // Ruta para procesar el formulario de ingreso de datos del cliente y PQRS no anónima
// Route::post('cliente/store', [ClientesController::class, "store"])->name("clientes.store");

// // Ruta para mostrar el formulario de ingreso de datos del cliente y PQRS anónima
// Route::get('cliente/anonima', [ClientesController::class, "anonima"])->name("clientes.anonima");

// // Ruta para procesar el formulario de ingreso de datos del cliente y PQRS anónima
// Route::post('cliente/store-anonima', [ClientesController::class, "storeAnonima"])->name("clientes.storeAnonima");