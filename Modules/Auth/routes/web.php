<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthController;

Route::post('register', [AuthController::class, 'register']);
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('auths', AuthController::class)->names('auth');
});
