<?php

namespace App\Http\Controllers;

use App\Services\ParameterService;
use Illuminate\Http\Request;

class ParametersController extends Controller
{

    public function index ()
    {
        $parameter= ParameterService::get();

        return view('accueil.index', [ 
            'parameter' => $parameter
        ]);
    }
    
}
