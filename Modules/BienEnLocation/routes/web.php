<?php

use Illuminate\Support\Facades\Route;
use Modules\BienEnLocation\Http\Controllers\BienEnLocationController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('bienenlocations', BienEnLocationController::class)->names('bienenlocation');
});
