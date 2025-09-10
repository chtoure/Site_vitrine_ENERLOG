<?php

namespace App\Http\Controllers;

use App\Services\EquipeService;
use Illuminate\Http\Request;

class EquipesController extends Controller
{
    public function index()
    {
        $equipes = EquipeService::getAll();
        return view('equipe.index', compact('equipes'));
    }


    
    public function show(int $id)
    {
        $equipe = EquipeService::getById($id);
        if (!$equipe) {
            abort(404, 'Équipe non trouvée');
        }
        return view('equipe.show', compact('equipe'));
    }
}