<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibreriaController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\ConsultasController;

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

//Ruta /
Route::get('/', [LibreriaController::class, 'getIndex']);

Route::get('libreria/historia', [LibreriaController::class, 'showHistoria']);

Route::get('libreria/mision-vision', [LibreriaController::class, 'showMision']);

Route::get('libreria/ubicacion', [libreriaController::class, 'showUbicacion']);

Route::get('servicios/habitaciones', [HabitacionesController::class, 'showHabitaciones']);

Route::get('servicios/eventos/{id}', function ($id) {
    return view('servicios.eventos', array('id' => $id));
});


Route::get('clientes/visualizar', [ClientesController::class, 'showClientes']);
//consultas
Route::get('consultas/HabitacionesSinSalida', [ConsultasController::class, 'showConsultas']);
Route::get('consultas/CantidadHabitaciones', [ConsultasController::class, 'ConsultasCantidad']);
// Ruta reservas
Route::get('reservas', [ReservasController::class, 'getReservas']);
// Ruta Facturacion
Route::get('facturacion', [FacturacionController::class, 'getFactura']);
// Ruta contáctos
Route::get('contactenos', [HotelController::class, 'showContactos']);
