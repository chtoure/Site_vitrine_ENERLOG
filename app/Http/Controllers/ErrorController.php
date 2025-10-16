<?php

namespace App\Http\Controllers;

use App\Services\ParameterService;
use App\services\ServicesService;

class ErrorController extends Controller
{
    public function pagenotFond() {
       $parameter= ParameterService::get();
       $services = ServicesService::getAll();

        return view('errors.page404',
            [
                'parameter' => $parameter,
                'services' => $services,
            ]
        );
    }

    public function serverError() {
        $parameter= ParameterService::get();
        $services = ServicesService::getAll();
        return view('errors.page500', 
            [
                'parameter' => $parameter,
                'services' => $services,
            ]
        );
    }
}