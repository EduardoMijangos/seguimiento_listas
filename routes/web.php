<?php

use App\Http\Controllers\GrupoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\ColmenasController;
use App\Http\Controllers\SociaController;
use App\Http\Controllers\ActividadController;

// Rutas para gestionar créditos
Route::resource('credits', CreditController::class);

// Rutas para las otras entidades
Route::resource('colmenas', ColmenasController::class);
Route::resource('socias', SociaController::class);
Route::resource('actividades', ActividadController::class);
Route::resource('grupos', GrupoController::class);

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});
