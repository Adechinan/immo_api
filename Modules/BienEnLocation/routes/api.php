<?php

use Illuminate\Support\Facades\Route;
use Modules\BienEnLocation\Http\Controllers\BienEnLocationController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('bien_en_location', BienEnLocationController::class);
});
