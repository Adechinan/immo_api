<?php

use Illuminate\Support\Facades\Route;
use Modules\BienEnVente\Http\Controllers\BienEnVenteController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('bien_en_vente', BienEnVenteController::class);
});
