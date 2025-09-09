<?php

namespace App\Http\Controllers;

use App\Services\TemoignageService;
use Illuminate\Http\Request;

class TemoignagesController extends Controller
{
    

    public function index()

    {
        $temoignages=TemoignageService::getAll();
        //dd($temoignages);
        return view('temoignage.index', compact('temoignages'));
    }


    public function show(int $id)
    {
        $un_temoignage=TemoignageService::getById($id);
        if (!$un_temoignage) {
            abort(404);
        }
        return view('temoignage.show', compact('un_temoignage'));
    }
}
