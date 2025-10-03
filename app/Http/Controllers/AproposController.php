<?php

namespace App\Http\Controllers;

use App\Services\ParameterService;
use App\Services\PartnerService;
use App\Services\SeoService;
use Illuminate\Http\Request;

class AproposController extends Controller
{
    //
    public function index ()
    {
        $partners= PartnerService::getAll();
        $parameter= ParameterService::get();

        SeoService::setMeta(
            $parameter['name'] ?? 'ENERLOG',
            "ENERLOG - La Page d'apropos.",
            route('public.news.index'),
            asset($parameter['logo']) 
        );

        return view(
            'apropos.index',
            [
                'partners'=>$partners,
                'parameter' => $parameter
            ]
        );
    }
}
