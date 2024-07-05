<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\ArriendosController;


Route::get('/',[HomeController::class,'index'])->name('home.index');




Route::get('/usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::post('/usuarios/login',[UsuariosController::class, 'autenticar'])->name('usuarios.autenticar');
Route::get('/vehiculos',[VehiculosController::class,'index'])->name('vehiculos.index');
Route::get('/arriendos',[ArriendosController::class,'index'])->name('arriendos.index');

