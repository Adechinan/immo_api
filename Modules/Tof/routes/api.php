<?php

use Illuminate\Support\Facades\Route;
use Modules\Tof\Http\Controllers\TofController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('tofs', TofController::class)->names('tof');
});
