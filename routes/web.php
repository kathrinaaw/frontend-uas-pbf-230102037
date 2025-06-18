<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;


Route::get('/', fn() => view('dashboard'));

Route::get('/pasien', [PasienController::class, 'index']);
Route::get('/pasien/create', [PasienController::class, 'create']);
Route::post('/pasien', [PasienController::class, 'store']);

