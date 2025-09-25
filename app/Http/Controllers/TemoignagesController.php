<?php

namespace App\Http\Controllers;

use App\Services\ParameterService;
use App\Services\TemoignageService;
use App\Services\SeoService;
use Illuminate\Http\Request;

class TemoignagesController extends Controller
{
    public function index()
    {
        $parameter = ParameterService::get();
        $temoignages = TemoignageService::getAll();

        SeoService::setMeta(
            $parameter['name'] ?? 'ENERLOG',
            "ENERLOG - Découvrez les témoignages de nos clients.",
            route('public.temoignages.index'),
            asset($parameter['logo'])
        );

        return view('temoignage.index', [
            'temoignages' => $temoignages,
            'parameter' => $parameter
        ]);
    }

    public function show(int $id)
    {
        $parameter = ParameterService::get();
        $un_temoignage = TemoignageService::getById($id);

        if (!$un_temoignage) {
            return redirect()->route('public.404');
        }

        SeoService::setMeta(
            $parameter['name'] ?? 'ENERLOG',
            "ENERLOG - Témoignage de " . ($un_temoignage['name'] ?? ''),
            route('public.temoignages.show', $un_temoignage['id']),
            asset($parameter['logo'])
        );

        return view('temoignage.show', [
            'un_temoignage' => $un_temoignage,
            'parameter' => $parameter
        ]);
    }
}