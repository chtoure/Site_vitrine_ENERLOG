<?php

namespace App\Http\Controllers;

use App\services\NewsServices;
use App\Services\ParameterService;
use App\Services\SeoService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getAllNews()
    {
        // Récupère toutes les news (array)
        $allNews = NewsServices::getAll();
        $parameter = ParameterService::get();

        // Metas SEO
        SeoService::setMeta(
            $parameter['name'] ?? 'ENERLOG',
            "ENERLOG - La liste des actualités de l'entreprise.",
            route('public.news.index'),
            asset($parameter['logo'] ?? '')
        );

        // On envoie TOUTES les actualités à la vue (plus de pagination)
        return view('news.listes', [
            'dataNews'  => $allNews,
            'parameter' => $parameter
        ]);
    }
public function getByIdNews(int $idNew)
{
    $news = NewsServices::getById($idNew);
    $parameter = ParameterService::get();

    if (!$news) {
        return redirect()->route('public.404');
    }

    SeoService::setMeta(
        $parameter['name'] ?? 'ENERLOG',
        "ENERLOG - La Page de details de l'actualité ".$news['name'],
        route('public.news.detail', $news['id']), 
        asset($parameter['logo'])
    );

    return view(
        'news.details',
        ['news' => $news, 'parameter' => $parameter]
    );
}

}
