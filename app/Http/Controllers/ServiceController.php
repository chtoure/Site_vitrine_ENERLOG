<?php

namespace App\Http\Controllers;

use App\Services\ParameterService;
use App\services\ServicesService;
use App\services\SolutionService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getAllServices() {
        $dataServices = ServicesService::getAll() ;
        $parameter= ParameterService::get();
        $solution= SolutionService::getById(1);

        return view(
            'services.listes',
            [
                'dataServices' => $dataServices,  
                'parameter' => $parameter,
                'solution' => $solution
            ]
        ) ;
    }

    public function getByIdService(int $idServ) {
        $service = ServicesService::getById($idServ);
        $parameter= ParameterService::get();

        return view(
            'services.details',
            ['service' => $service,  'parameter' => $parameter ]
        );
    }
}
