<?php

namespace App\Services;

use Artesaos\SEOTools\Facades\SEOTools;

class SeoService
{
    public static function setMeta(string $title, string $description, ?string $url = null, ?string $image = null): void
    {
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);

        if ($url) {
            SEOTools::opengraph()->setUrl($url);
        }

        if ($image) {
            SEOTools::opengraph()->addImage($image);
        }
    }
}
