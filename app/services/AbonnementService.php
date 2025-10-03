<?php

namespace App\Services;

class AbonnementService
{

    private static string $filename = 'abonnements';
    private static string $path = 'database/data';

    public static function getAll(): ?array
    {
        return readJson(self::$path, self::$filename);
    }
}
