<?php

namespace App\Http\Controllers;

use App\Services\EquipeService;
use App\Services\ParameterService;
use App\Services\SeoService;
use Illuminate\Http\Request;

class EquipesController extends Controller
{
    public function index()
    {
        $parameter = ParameterService::get();
        $equipes = EquipeService::getAll();

            SeoService::setMeta(
                $parameter['name'] ?? 'ENERLOG',
                "ENERLOG - Découvrez notre équipe.",
                route('public.equipes.index'),
                asset($parameter['logo'])
            );

        return view('equipe.index', [
            'equipes' => $equipes,
            'parameter' => $parameter
        ]);
    }

    public function show(int $id)
    {
        $parameter = ParameterService::get();
        $equipe = EquipeService::getById($id);

        if (!$equipe) {
            return redirect()->route('public.404');
        }

            SeoService::setMeta(
                $parameter['name'] ?? 'ENERLOG',
                "ENERLOG - Détail du membre de l'équipe " . ($equipe['first_name'] ?? ''),
                route('public.equipes.show', $equipe['id']),
                asset($parameter['logo'])
            );
        

        return view('equipe.show', [
            'equipe' => $equipe,
            'parameter' => $parameter
        ]);
    }
}