<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaminhaoController;
use App\Http\Controllers\PneuController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/caminhoes', [CaminhaoController::class, 'index']);
Route::get('/caminhoes/create', [CaminhaoController::class, 'create']);
Route::post('/caminhoes', [CaminhaoController::class, 'store']);
Route::resource('caminhoes', CaminhaoController::class);
Route::resource('pneus', PneuController::class);
