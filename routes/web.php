<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibreriaController;
use App\Http\Controllers\EditorialesController;
use App\Http\Controllers\LibrosController;


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


Route::get('editoriales', [EditorialesController::class, 'index'])->name('listadoEditoriales');
Route::get('editoriales/registro', [EditorialesController::class , 'formularioReg'])->name('form_registroEditorial');
Route::post('editoriales/registro', [EditorialesController::class, 'registrar'])->name('registrarEditorial');
Route::get('editoriales/actualizar/{id}', [EditorialesController::class, 'formularioAct'])->name('form_actualizaEditorial');
Route::post('editoriales/actualizar/{id}', [EditorialesController::class, 'actualizar'])->name('actualizarEditorial');
Route::get('editoriales/eliminar/{id}', [EditorialesController::class, 'eliminar'])->name('eliminarEditorial');
Route::get('editoriales/activar/{id}', [EditorialesController::class, 'activar'])->name('activarEditorial');

Route::get('Libros', [LibrosController::class, 'index'])->name('listado');



