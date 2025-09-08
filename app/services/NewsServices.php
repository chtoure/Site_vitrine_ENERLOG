<?php

namespace App\services;

class NewsServices {
    // Properties
    const filePath = "database\data";
    const fileName="news.json";

    // Methods
    static function getAll(): ?array {
        return readJson(NewsServices::filePath,NewsServices::fileName);
    }
    
    static function getById(int $idNew): ?array {
        $dataNews = readJson(NewsServices::filePath,NewsServices::fileName);
        $objetNew= array_filter($dataNews, function($new) use ($idNew){
          return isset($new['id']) && $new['id'] === $idNew;
        });
        // Retourne le premier objet trouvé ou null
        return !empty($objetNew) ? array_values($objetNew)[0] : null;
    }
   
}
