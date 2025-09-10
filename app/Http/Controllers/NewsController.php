<?php

namespace App\Http\Controllers;

use App\services\NewsServices;
use App\Services\ParameterService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    
     public function getAllNews() {
        $dataNews = NewsServices::getAll() ;
        $parameter= ParameterService::get();


        return view(
            'news.listes',
            ['dataNews' => $dataNews,'parameter' => $parameter]
        ) ;
    }

    public function getByIdNews(int $idNew) {
        $news = NewsServices::getById($idNew);
        $parameter= ParameterService::get();


        return view(
            'news.details',
            ['news' => $news,'parameter' => $parameter ]
        );
    }

}
