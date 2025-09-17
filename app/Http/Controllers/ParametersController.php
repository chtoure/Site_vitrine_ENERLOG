<?php

namespace App\Http\Controllers;

use App\Services\EquipeService;
use App\services\NewsServices;
use App\Services\ParameterService;
use App\Services\PartnerService;
use App\Services\SeoService;
use App\services\ServicesService;
use App\services\SolutionService;
use App\Services\TemoignageService;

class ParametersController extends Controller
{

    public function index()
    {
        $parameter = ParameterService::get();
        $solution = SolutionService::getById(1);
        $equipe = EquipeService::getAll();
        $services = ServicesService::getAll();
        $partners = PartnerService::getAll();
        $temoignages = TemoignageService::getAll();
        $news = NewsServices::getAll();

        SeoService::setMeta(
            $parameter['name'] ?? 'ENERLOG',
            $parameter['description'] ?? 'ENERLOG - Création de solutions numériques innovantes pour entreprises et institutions.',
            route('public.index'),
            asset($parameter['logo']) 
        );

        return view('accueil.index', [
            'parameter' => $parameter,
            'solution' => $solution,
            'equipe' => $equipe,
            'services' => $services,
            'partners' => $partners,
            'temoignages' => $temoignages,
            'news' => $news,
        ]);
    }

    
}
