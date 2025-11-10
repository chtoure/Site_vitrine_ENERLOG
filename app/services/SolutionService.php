<?php

namespace App\Services;

class SolutionService {
    // Properties
    const filePath = "database\data";
    const fileName="solution.json";

    // Methods
    static function getAll(): ?array {
        return readJson(SolutionService::filePath,SolutionService::fileName);
    }
    
    static function getById(int $idSolution): ?array  {
        $dataSolution = readJson(SolutionService::filePath,SolutionService::fileName);
        $objetSolution = array_filter($dataSolution, function($solution) use ($idSolution){
            return isset($solution['id']) && $solution['id'] === $idSolution;
        });
        // Retourne le premier objet trouvé ou null
        return !empty($objetSolution) ? array_values($objetSolution)[0] : null;
    }
   
}

