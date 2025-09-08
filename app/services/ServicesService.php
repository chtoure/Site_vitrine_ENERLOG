<?php

namespace App\services;

class ServicesService {
    // Properties
    const filePath = "database\data";
    const fileName="services.json";

    // Methods
    static function getAll(): ?array {
        return readJson(ServicesService::filePath,ServicesService::fileName);
    }
    
    static function getById(int $idService): ?array  {
        $dataServices = readJson(ServicesService::filePath,ServicesService::fileName);
        $objetService = array_filter($dataServices, function($service) use ($idService){
            return isset($service['id']) && $service['id'] === $idService;
        });
        // Retourne le premier objet trouvé ou null
        return !empty($objetService) ? array_values($objetService)[0] : null;
    }
   
}

