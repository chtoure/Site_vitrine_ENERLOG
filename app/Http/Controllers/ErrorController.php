<?php

namespace App\Http\Controllers;

use App\Services\ParameterService;

class ErrorController extends Controller
{
    public function pagenotFond() {
       $parameter= ParameterService::get();
        return view('errors.page404', compact('parameter'));
    }

    public function serverError() {
        $parameter= ParameterService::get();
        return view('errors.page500', compact('parameter'));
    }
}