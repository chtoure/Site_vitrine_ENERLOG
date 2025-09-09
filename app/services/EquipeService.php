<?php

namespace App\Services;

use Illuminate\Support\Arr;

class EquipeService

{

    public static  $filepath = 'database\data';
    public static $filename = 'equipes.json';




    public static function getAll(): ?array

    {
       
        if (function_exists('readJson')) {
            return readJson(self::$filepath, self::$filename);

        }
        return null;
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
