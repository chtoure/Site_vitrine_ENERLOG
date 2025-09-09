<?php

namespace App\Http\Controllers;

use App\services\ServicesService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getAllServices() {
        $dataServices = ServicesService::getAll() ;

        return view(
            'services.listes',
            ['dataServices' => $dataServices]
        ) ;
    }

    public function getByIdService(int $idServ) {
        $service = ServicesService::getById($idServ);

        return view(
            'services.details',
            ['service' => $service ]
        );
    }
}
