<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\AgendaController;

Route::get('/', [HomeController::class, 'getIndex']);
Route::get('/catalog', [ImagenesController::class, 'getContent']);
Route::post('/agenda/store', [AgendaController::class, 'store'])->name('agenda.store');

