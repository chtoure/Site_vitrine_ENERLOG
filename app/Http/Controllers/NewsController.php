<?php

namespace App\Http\Controllers;

use App\services\NewsServices;
use App\Services\ParameterService;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;


class NewsController extends Controller
{
    
    //  public function getAllNews() {
    //     $dataNews = NewsServices::getAll() ;
    //     $parameter= ParameterService::get();


    //     return view(
    //         'news.listes',
    //         ['dataNews' => $dataNews,'parameter' => $parameter]
    //     ) ;
    // }


    public function getAllNews() {
        $allNews = NewsServices::getAll(); // ça retourne un array
        $parameter = ParameterService::get();

        // Convertir array → Collection
        $collection = collect($allNews);

        // Pagination manuelle
        $perPage = 3; // 9 news par page (3 lignes × 3 cards)
        $currentPage = request()->get('page', 1);
        $pagedData = $collection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $dataNews = new LengthAwarePaginator(
            $pagedData,
            $collection->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('news.listes', [
            'dataNews' => $dataNews,
            'parameter' => $parameter
        ]);
    }

    public function getByIdNews(int $idNew) {
        $news = NewsServices::getById($idNew);
        $parameter= ParameterService::get();

        if (!$news) {
            return redirect()->route('public.404');
        }


        return view(
            'news.details',
            ['news' => $news,'parameter' => $parameter ]
        );
    }

}
