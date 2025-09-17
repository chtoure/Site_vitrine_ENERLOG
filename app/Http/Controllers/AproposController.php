<?php

namespace App\Http\Controllers;

use App\Services\ParameterService;
use App\Services\PartnerService;
use Illuminate\Http\Request;

class AproposController extends Controller
{
    //
    public function index ()
    {
        $partners= PartnerService::getAll();
        $parameter= ParameterService::get();

        return view(
            'apropos.index',
            [
                'partners'=>$partners,
                'parameter' => $parameter
            ]
        );
    }
}
