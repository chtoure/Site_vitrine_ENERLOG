<?php

namespace App\Http\Controllers;

use App\Services\EquipeService;
use App\Services\ParameterService;
use App\Services\PartnerService;
use App\services\ServicesService;
use App\services\SolutionService;
use App\Services\TemoignageService;

class ParametersController extends Controller
{

    public function index ()
    {
        
        $parameter= ParameterService::get();
        $solution= SolutionService::getById(1);
        $equipe= EquipeService::getAll();
        $services= ServicesService::getAll();
        $partners= PartnerService::getAll();
        $temoignages= TemoignageService::getAll();

        return view('accueil.index', [ 
            'parameter' => $parameter,
            'solution' => $solution,
            'equipe' => $equipe,
            'services' => $services,
            'partners' => $partners,
            'temoignages' => $temoignages
        ]);
    }
    
}
