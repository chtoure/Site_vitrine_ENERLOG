<?php

namespace App\Http\Controllers;

use App\Services\PartenerService;
use Illuminate\Http\Request;

class PartenersController extends Controller
{
    public function index ()
    {
        $parteners= PartenerService::getAll();

        return view(
            'partener.index',
            [
                'parteners'=>$parteners
            ]
        );
    }

    public function detail (Int $id)
    {
        $partener=PartenerService::getId($id);

        return view(
            'partener.detail',
            [
                'partener'=> $partener
            ]
        );
    }
}
