<?php

use Illuminate\Support\Facades\Route;
use Modules\Bien\Http\Controllers\BienController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('bien', BienController::class)->except(['index', 'show']);
});

Route::get('/bien', [BienController::class, 'index']);
Route::get('bien/{id}', [BienController::class, 'show']);
