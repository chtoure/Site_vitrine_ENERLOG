<?php

namespace App\Http\Controllers;

use App\Services\ParameterService;
use App\Services\PartnerService;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index ()
    {
        $partners= PartnerService::getAll();
        $parameter= ParameterService::get();

        return view(
            'partner.index',
            [
                'partners'=>$partners,
                'parameter' => $parameter
            ]
        );
    }

    public function detail (Int $id)
    {
        $partner=PartnerService::getId($id);
        $parameter= ParameterService::get();

        if (!$partner) {
            return redirect()->route('public.404');
        }

        return view(
            'partner.detail',
            [
                'partner'=> $partner,
                'parameter' => $parameter
            ]
        );
    }
}