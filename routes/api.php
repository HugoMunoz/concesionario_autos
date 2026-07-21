<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ConsultasController;

Route::get('/prueba', [ConsultasController::class, 'index']);
Route::get('/prueba/{asesor}', [ConsultasController::class, 'show']);
