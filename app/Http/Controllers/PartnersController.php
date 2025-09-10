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

        return view(
            'partner.detail',
            [
                'partner'=> $partner,
                'parameter' => $parameter
            ]
        );
    }
}







// public function index ()
//     {
//         $partnersJson= PartnerService::getAll();

//         $page = request()->get('page', 1);

//         $perPage = 3;

//         $items = collect($partnersJson);

//         $partners = new LengthAwarePaginator(
//             $items->forPage($page, $perPage),
//             $items->count(),
//             $perPage,
//             $page,
//             ['path' => Paginator::resolveCurrentPath()]
//         );

//         return view(
//             'partner.index',
//             [
//                 'partners'=>$partners
//             ]
//         );
//     }