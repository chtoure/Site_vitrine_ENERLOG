<?php

namespace App\Services;

use Illuminate\Support\Arr;

class TemoignageService
{
    public static function getAll(): ?array
    {
        return readJson('database\data\temoignages.json', 'items');
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