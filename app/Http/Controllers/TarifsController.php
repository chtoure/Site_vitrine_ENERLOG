<?php

namespace App\Http\Controllers;

use App\Services\AbonnementService;
use App\Services\ParameterService;
use App\Services\SeoService;
use App\services\ServicesService;

class TarifsController extends Controller {

    public function index()
    {
        $parameter = ParameterService::get();
        $abonnements = AbonnementService::getAll();
        $services = ServicesService::getAll();
        

        $parameter["business_name"]="Tarifs";
        $parameter["summarize"]="Des tarifs simples et compréhensifs.";
        $parameter["hero_image"]="/images/tarif/tarifs.jpg";


        SeoService::setMeta(
            $parameter['name'] ?? 'ENERLOG',
            $parameter['description'] ?? "ENERLOG - Les Tarifications D'Enerlog ",
            route('public.tarif.index'),
            asset($parameter['logo']) 
        );

        return view('tarif.index', [
            'parameter' => $parameter,
            'abonnements' => $abonnements,
            'services' => $services
        ]);
    }
}