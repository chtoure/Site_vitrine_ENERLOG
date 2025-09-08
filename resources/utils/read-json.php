
<?php

    use Illuminate\Support\Facades\File;

    function readJson(string $path, string $filename) :?array
    {

        if (!str_ends_with($filename, ".json")) {
            $filename .= ".json";
        }

        $fullPath = base_path(rtrim($path, '/\\') . DIRECTORY_SEPARATOR . $filename);

        if (!File::exists($fullPath)) {
            return null; 
        }

        $content = File::get($fullPath);

        return json_decode($content, true);
    }