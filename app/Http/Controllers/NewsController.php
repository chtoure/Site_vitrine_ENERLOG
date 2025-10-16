<?php

namespace App\Http\Controllers;

use App\services\NewsServices;
use App\Services\ParameterService;
use App\Services\SeoService;
use App\services\ServicesService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getAllNews()
    {
        // Récupère toutes les news (array)
        $allNews = NewsServices::getAll();
        $parameter = ParameterService::get();
        $services = ServicesService::getAll();

        $parameter["name"]="News";
        $parameter["summarize"]="Découvrez nos actualités digitales et restez informé sur les tendances de la transformation numérique.";
        $parameter["hero_image"]="/images/news/news.webp";

        SeoService::setMeta(
            $parameter['name'] ?? 'ENERLOG',
            "ENERLOG - La liste des actualités de l'entreprise.",
            route('public.news.index'),
            asset($parameter['logo'] ?? '')
        );

        return view('news.listes', [
            'dataNews'  => $allNews,
            'parameter' => $parameter,
            'services' => $services
        ]);
    }
public function getByIdNews(int $idNew)
{
    $news = NewsServices::getById($idNew);
    $parameter = ParameterService::get();
    $services = ServicesService::getAll();

    $parameter["name"]="News";
    $parameter["summarize"]="Découvrez nos actualités digitales et restez informé sur les tendances de la transformation numérique.";
    $parameter["hero_image"]="/images/news/news.webp";

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
        [
            'news' => $news,
            'parameter' => $parameter,
            'services' => $services
        ]
    );
}

}
