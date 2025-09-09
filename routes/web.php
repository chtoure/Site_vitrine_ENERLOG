<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
use App\services\ServicesService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');

    // return readJson("database\data", "parameters.json");
});

// Routes : Services
Route::get('/services', [ServiceController::class,'getAllServices'])->name('services.listes');
Route::get('/services/{id}', [ServiceController::class,'getByIdService'])->name('services.details');

// Routes : News
Route::get('/news', [NewsController::class,'getAllNews'])->name('news.listes');
Route::get('/news/{id}', [NewsController::class,'getByIdNews'])->name('news.details');