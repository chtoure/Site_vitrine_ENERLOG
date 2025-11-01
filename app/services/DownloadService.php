<?php

namespace App\Services;

use Illuminate\Support\Arr;

class DownloadService

{

    public static  $filepath = 'database\data';
    public static $filename = 'download.json';

    public static function get(): ?array

    {
        return readJson(self::$filepath, self::$filename);
    }


}
