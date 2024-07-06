<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\ArriendosController;
use App\Http\Controllers\TiposController;
use App\Http\Controllers\ClientesController;


Route::get('/',[HomeController::class,'index'])->name('home.index')->middleware('auth');






Route::get('/usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::post('/usuarios/login',[UsuariosController::class, 'autenticar'])->name('usuarios.autenticar');
Route::get('/usuarios',[UsuariosController::class,'index'])->name('usuarios.index');
Route::get('/usuarios/gestion',[UsuariosController::class,'edit'])->name('usuarios.edit');
Route::get('/usuarios/crear',[UsuariosController::class,'create'])->name('usuarios.create');
Route::post('/usuarios/crear',[UsuariosController::class,'store'])->name('usuarios.store');
Route::put('/usarios',[UsuariosController::class,'update'])->name('usuarios.update');





// Vehiculos 
Route::get('/vehiculos',[VehiculosController::class,'index'])->name('vehiculos.index');
Route::get('/vehiculos/create',[VehiculosController::class,'create'])->name('vehiculos.create');
Route::post('/vehiculos/create',[VehiculosController::class,'store'])->name('vehiculos.store');
Route::delete('vehiculos/destroy/{vehiculo}',[VehiculosController::class,'destroy'])->name('vehiculos.destroy');

// Arriendos 
Route::get('/arriendos',[ArriendosController::class,'index'])->name('arriendos.index');
Route::post('/arriendos',[ArriendosController::class,'store'])->name('arriendos.store');

Route::get('/arriendos/{vehiculo}',[ArriendosController::class,'create'])->name('arriendos.create');


// Tipos 
Route::get('/tipos',[TiposController::class,'index'])->name('tipos.index');
Route::get('/tipos/create',[TiposController::class,'create'])->name('tipos.create');
Route::post('/tipos/create',[TiposController::Class,'store'])->name('tipos.store');
Route::delete('tipos/destroy/{tipo}',[TiposController::class,'destroy'])->name('tipos.destroy');

Route::get('/tipos/{tipo}/edit',[TiposController::class,'edit'])->name('tipos.edit');
Route::put('/tipos',[TiposController::class,'update'])->name('tipos.update');


//clientes
Route::get('/clientes',[ClientesController::class,'index'])->name('clientes.index');