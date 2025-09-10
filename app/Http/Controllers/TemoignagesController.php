<?php

namespace App\Http\Controllers;

use App\Services\ParameterService;
use App\Services\TemoignageService;
use Illuminate\Http\Request;

class TemoignagesController extends Controller
{
    

    public function index()

    {
        $parameter= ParameterService::get();
        $temoignages=TemoignageService::getAll();
        //dd($temoignages);
        return view('temoignage.index', compact('temoignages', 'parameter'));
    }


    public function show(int $id)
    {
        $parameter= ParameterService::get();
        $un_temoignage=TemoignageService::getById($id);
        if (!$un_temoignage) {
            abort(404);
        }
        return view('temoignage.show', compact('un_temoignage','parameter'));
    }
}
