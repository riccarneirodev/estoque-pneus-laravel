<?php

use App\Http\Controllers\CaminhaoController;

    Route::get('/caminhoes', [CaminhaoController::class, 'index']);
    Route::get('/caminhoes/create', [CaminhaoController::class, 'create']);
    Route::post('/caminhoes', [CaminhaoController::class, 'store']);
