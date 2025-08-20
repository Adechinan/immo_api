<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;


Route::get('biensen', function(){
    return response()->json('coucou');
});

require __DIR__.'/auth.php';
