<?php

use App\Http\Controllers\ParametersController;
use App\Http\Controllers\PartenersController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
use App\services\ServicesService;
use Illuminate\Support\Facades\Route;


Route::name('public.')
    ->prefix('/')
    ->group(function () {
        Route::get('/', [ParametersController::class, 'index'])->name('index');
        Route::get('/parteners', [PartenersController::class, 'index'])->name('parteners');
        Route::get('/parteners/{id}', [PartenersController::class, 'detail'])->name('partenersDetail');
    
});


// Routes : Services
Route::get('/services', [ServiceController::class,'getAllServices'])->name('services.listes');
Route::get('/services/{id}', [ServiceController::class,'getByIdService'])->name('services.details');

// Routes : News
Route::get('/news', [NewsController::class,'getAllNews'])->name('news.listes');
Route::get('/news/{id}', [NewsController::class,'getByIdNews'])->name('news.details');