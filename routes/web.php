<?php

use App\Http\Controllers\CaminhaoController;


Route::get('/caminhoes', [CaminhaoController::class, 'index']);
Route::post('/caminhoes', [CaminhaoController::class, 'store']);