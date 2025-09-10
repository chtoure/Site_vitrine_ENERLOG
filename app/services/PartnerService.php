<?php

namespace App\Services;

class PartnerService
{

    private static string $filename = 'parteners';
    private static string $path = 'database/data';

    public static function getAll(): ?array
    {
        return readJson(self::$path, self::$filename);
    }

    public static function getId(int $id): ?array
    {
        $all = self::getAll();

        if (!$all) {
            return null;
        }

        foreach ($all as $partner) {
            if (isset($partner['id']) && $partner['id'] === $id) {
                return $partner;
            }
        }

        return null;
    }
}
