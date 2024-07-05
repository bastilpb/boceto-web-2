<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\ArriendosController;
use App\Http\Controllers\TiposController;


Route::get('/',[HomeController::class,'index'])->name('home.index');



// Usuarios 
Route::get('/usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::post('/usuarios/login',[UsuariosController::class, 'autenticar'])->name('usuarios.autenticar');


// Vehiculos 
Route::get('/vehiculos',[VehiculosController::class,'index'])->name('vehiculos.index');


// Arriendos 
Route::get('/arriendos',[ArriendosController::class,'index'])->name('arriendos.index');
Route::post('/arriendos',[ArriendosController::class,'store'])->name('arriendos.store');



// Tipos 
Route::get('/tipos',[TiposController::class,'index'])->name('tipos.index');


// Clientes