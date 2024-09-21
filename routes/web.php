<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreditController;

// Rutas para gestionar créditos
Route::resource('credits', CreditController::class);

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});
