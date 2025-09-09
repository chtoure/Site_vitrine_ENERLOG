<?php

namespace App\Http\Controllers;

use App\services\NewsServices;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    
     public function getAllNews() {
        $dataNews = NewsServices::getAll() ;

        return view(
            'news.listes',
            ['dataNews' => $dataNews]
        ) ;
    }

    public function getByIdNews(int $idNew) {
        $news = NewsServices::getById($idNew);

        return view(
            'news.details',
            ['news' => $news ]
        );
    }

}
