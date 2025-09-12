<?php

namespace App\Http\Controllers;

use App\Services\EquipeService;
use App\Services\ParameterService;
use Illuminate\Foundation\Exceptions\Renderer\Exception;
use Illuminate\Http\Request;

class EquipesController extends Controller
{
    public function index()

    {
        try {
            $parameter= ParameterService::get();
            $equipes = EquipeService::getAll();
            return view('equipe.index', compact('equipes', 'parameter'));
        } 
        catch (Exception $e) {
           return redirect()->route('500');
        }
        
    }


    
    public function show(int $id)
    {
        $parameter= ParameterService::get();
        $equipe = EquipeService::getById($id);
        if (!$equipe) {
            abort(404, 'Équipe non trouvée');
        }
        return view('equipe.show', compact('equipe', 'parameter'));
    }
}