<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\DataController;

// Rutas para gestionar créditos
Route::resource('credits', CreditController::class);

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});
