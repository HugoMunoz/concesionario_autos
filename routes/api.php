<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ConsultasController;

Route::get('/prueba', [ConsultasController::class, 'index']);

Route::get('/prueba/{asesor}', [ConsultasController::class, 'show']);

Route::get('/asesor/{asesor}/compras', [ConsultasController::class,'comprasAsesor']);

Route::get('/cliente/{cliente}/compras', [ConsultasController::class,'comprasCliente']);

Route::get('/compras/clientes-asesores', [ConsultasController::class,'comprasClientesAsesores']);
