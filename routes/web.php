<?php

use App\Http\Controllers\AproposController;
use App\Http\Controllers\EmailsController;
use App\Http\Controllers\EquipesController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\ParametersController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TemoignagesController;
use Illuminate\Support\Facades\Route;

Route::name('public.')->prefix('/')->group(function () {

    Route::get('/', [ParametersController::class, 'index'])->name('index');
    
    Route::group([
        'prefix' => 'parameter',
        'as' => 'parameter.'
    ], function () {
        Route::get('', [ParametersController::class, 'index'])->name('index');
    });

    Route::group([
        'prefix' => 'about',
        'as' => 'about.'
    ], function () {
        Route::get('', [AproposController::class, 'index'])->name('index');
    });

    // Route::group([
    //     'prefix' => 'partners',
    //     'as' => 'partners.'
    // ], function () {
    //     Route::get('', [PartnersController::class, 'index'])->name('index');
    //     Route::get('/{id}', [PartnersController::class, 'detail'])
    //         ->where('id', '[0-9]+')
    //         ->name('detail');
    // });

    Route::group([
        'prefix' => 'services',
        'as' => 'services.'
    ], function () {
        Route::get('', [ServiceController::class,'getAllServices'])->name('index');
        // Route::get('/{id}', [ServiceController::class,'getByIdService'])
        //     ->where('id', '[0-9]+')
        //     ->name('detail');
    });

    Route::group([
        'prefix' => 'news',
        'as' => 'news.'
    ], function () {
        Route::get('', [NewsController::class,'getAllNews'])->name('index');
        Route::get('/{id}', [NewsController::class,'getByIdNews'])
            ->where('id', '[0-9]+')
            ->name('detail');
    });

    // Route::group([
    //     'prefix' => 'equipes',
    //     'as' => 'equipes.'
    // ], function () {
    //     Route::get('', [EquipesController::class, 'index'])->name('index');
    //     Route::get('/{id}', [EquipesController::class, 'show'])
    //         ->where('id', '[0-9]+')
    //         ->name('show');
    // });


    // Route::group([
    //     'prefix' => 'temoignages',
    //     'as' => 'temoignages.'
    // ], function () {
    //     Route::get('', [TemoignagesController::class, 'index'])->name('index');
    //     Route::get('/{id}', [TemoignagesController::class, 'show'])
    //         ->where('id', '[0-9]+')
    //         ->name('show');
    // });

    Route::get('/500', [ErrorController::class, 'serverError'])->name('500');
    Route::get('/404', [ErrorController::class, 'pagenotFond'])->name('404');

    Route::group([
        'prefix' => 'emails',
        'as' => 'emails.'
    ], function () {
        Route::post('', [EmailsController::class, 'contact'])->name('contact');
    });

    Route::fallback(function () {
        return app(ErrorController::class)->pagenotFond();
    });

});


