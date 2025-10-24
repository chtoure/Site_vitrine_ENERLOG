<?php

namespace App\Http\Controllers;

use App\Services\ParameterService;
use App\Services\SeoService;
use App\services\ServicesService;
use App\services\SolutionService;
use Illuminate\Http\Request;
 use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function getAllServices() {
        $dataServices = ServicesService::getAll() ;
        $parameter= ParameterService::get();
        $solution= SolutionService::getById(1);


        $parameter["business_name"]="Services";
        $parameter["summarize"]="Explorez nos services digitaux conçus pour accompagner votre transformation numérique.";
        // $parameter["hero_image"]="/images/services/solution_carte.jpeg";

        SeoService::setMeta(
            $parameter['name'] ?? 'ENERLOG',
            "ENERLOG - La liste des services que l'entreprise proposent.",
            route('public.services.index'),
            asset($parameter['logo']) 
        );

        return view(
            'services.listes',
            [
                'services' => $dataServices,  
                'parameter' => $parameter,
                'solution' => $solution
            ]
        ) ;
    }

    public function getByIdService(int $idServ) {
        $dataServices = ServicesService::getAll() ;
        $service = ServicesService::getById($idServ);
        $parameter= ParameterService::get();

        if (!$service) {
            return redirect()->route('public.404');
        }

        $parameter["business_name"]=$service["name"];
        $parameter["summarize"]=Str::limit($service['description'], 70, '...');
        // $parameter["hero_image"]=$service["images"][0];

         SeoService::setMeta(
            $parameter['name'] ?? 'ENERLOG',
            "ENERLOG - La Page de details du service ".$service['name'],
            route('public.services.detail', $service['id']),
            asset($parameter['logo']) 
        );

        return view(
            'services.details',
            ['service' => $service,  'parameter' => $parameter , 'services' => $dataServices]
        );
    }
}
 