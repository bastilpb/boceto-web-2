<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index'])->name('home.index');




Route::get('/usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');