<?php

namespace App\Services;

use Illuminate\Support\Arr;

class TemoignageService
{

    public static  $filepath = 'database\data';
    public static $filename = 'temoignages.json';


    public static function getAll(): ?array
    {
        return readJson(self::$filepath, self::$filename );
    }


    public static function getById($id): ?array
    {
        $data = self::getAll();

        if (!$data) {
            return null;
        }

        return Arr::first($data, fn($item) => ($item['id'] ?? null) == $id);
    }
}