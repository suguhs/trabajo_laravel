<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\VisualAgendaController;

Route::get('/', [HomeController::class, 'getIndex']);
Route::get('/catalog/imagenes', [ImagenesController::class, 'getContent']);
Route::post('/catalog/agenda', [AgendaController::class, 'store'])->name('agenda.store');
Route::get('/catalog/formulario', [VisualAgendaController::class, 'getForm']);

