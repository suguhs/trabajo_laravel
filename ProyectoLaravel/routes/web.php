<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\AgendaController;


// Rutas
Route::get('/imagen', [ImagenesController::class, 'index']);
Route::get('/agenda/create', [AgendaController::class, 'create']);
Route::post('/agenda/store', [AgendaController::class, 'store']);
Route::get('/agenda', [AgendaController::class, 'show']);
