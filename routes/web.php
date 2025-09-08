<?php

use App\services\ServicesService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');

    return readJson("database\data", "parameters.json");
});
