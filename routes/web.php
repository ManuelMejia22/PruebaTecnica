<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturasController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ComentariosController;
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

//Rutas Asignaturas
Route::get('/', [AsignaturasController::class, 'index'])->name('asignatura.index');
Route::get('/crearAsignatura', [ AsignaturasController::class, 'create'])->name('asignatura.create');
Route::post('/asignaturaStore', [ AsignaturasController::class, 'store'])->name('asignatura.store');

//Rutas Preguntas
Route::get('/asignatura/{id}', [PreguntasController::class, 'index'])->name('preguntas.index');
Route::get('/crearPregunta/{id}', [PreguntasController::class, 'create'])->name('preguntas.create');
Route::post('/preguntaStore/{id}', [PreguntasController::class, 'store'])->name('preguntas.store');


//Rutas Usuarios
Route::get('/usuarios/{id}', [UsuariosController::class, 'index']) ->name('usuarios.index');
Route::get('/crearUsuario/{id}', [UsuariosController::class, 'create']) ->name('usuarios.create');
Route::post('/usuarioStore/{id}', [UsuariosController::class, 'store']) ->name('usuarios.store');


//Rutas Comentarios
//Route::get('/', [ComentariosController::class, 'index']) ->name('comentarios.index');
Route::get('/crearComentario/{id}/{idAsignatura}', [ComentariosController::class, 'create']) ->name('comentarios.create');
Route::post('/comentarioStore/{id}/{idAsignatura}', [ComentariosController::class, 'store']) ->name('comentarios.store');

