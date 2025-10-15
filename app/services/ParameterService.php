<?php

namespace App\Services;

class ParameterService
{

    private static string $filename = 'parameters';
    private static string $path = 'database/data';

    public static function get(): ?array
    {
        
        return readJson(self::$path, self::$filename);
    }
}
