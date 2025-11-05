<?php

namespace App\Services;

class FAQService {
    // Properties
    const filePath = "database\data";
    const fileName="faq.json";

    // Methods
    static function getAll(): ?array {
        return readJson(FAQService::filePath,FAQService::fileName);
    }
    
    static function getById(int $idFaq): ?array  {
        $dataFaq = readJson(FAQService::filePath,FAQService::fileName);
        $objetFaq = array_filter($dataFaq, function($faq) use ($idFaq){
            return isset($faq['id']) && $faq['id'] === $idFaq;
        });
        // Retourne le premier objet trouvé ou null
        return !empty($objetFaq) ? array_values($objetFaq)[0] : null;
    }
   
}

