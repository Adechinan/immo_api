<?php

use Illuminate\Support\Facades\Route;
use Modules\BienEnVente\Http\Controllers\BienEnVenteController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('bienenventes', BienEnVenteController::class)->names('bienenvente');
});
