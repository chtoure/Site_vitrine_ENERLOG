<?php

use App\Http\Controllers\ParametersController;
use App\Http\Controllers\PartenersController;
use Illuminate\Support\Facades\Route;


Route::name('public.')
    ->prefix('/')
    ->group(function () {
        Route::get('/', [ParametersController::class, 'index'])->name('index');
        Route::get('/parteners', [PartenersController::class, 'index'])->name('parteners');
        Route::get('/parteners/{id}', [PartenersController::class, 'detail'])->name('partenersDetail');
});

