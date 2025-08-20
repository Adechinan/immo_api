<?php

use Illuminate\Support\Facades\Route;
use Modules\Tof\Http\Controllers\TofController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('tofs', TofController::class)->names('tof');
});
