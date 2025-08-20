<?php

use Illuminate\Support\Facades\Route;
use Modules\Bien\Http\Controllers\BienController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('biens', BienController::class)->names('bien');
});
