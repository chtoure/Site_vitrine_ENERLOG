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
    
    static function getById(int $idsolution, int $idService): ?array
    {
        $dataSolutions = readJson(ServicesService::filePath, ServicesService::fileName);

        if (empty($dataSolutions) || !is_array($dataSolutions)) {
            return null;
        }

        // Trouver la solution correspondante
        foreach ($dataSolutions as $solution) {
            if (isset($solution['id']) && $solution['id'] ==$idsolution) {
                // Si la solution n'a pas de services, on retourne null
                if (empty($solution['services']) || !is_array($solution['services'])) {
                    return null;
                }

                // Chercher le service à l'intérieur de cette solution
                foreach ($solution['services'] as $service) {
                    if (isset($service['id']) && $service['id'] ==$idService) {
                        // Optionnel : ajouter des infos sur la solution dans le service
                        // $service['solution_id'] = $solution['id'];
                        // $service['solution_name'] = $solution['solution'] ?? null;

                        return $service;
                    }
                }

                // solution trouvée mais service non trouvé
                return null;
            }
        }

        // solution non trouvée
        return null;
    }
   
}

