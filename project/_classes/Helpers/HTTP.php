<?php

namespace Helpers;

class HTTP
{
    static $url = "http://localhost/project";

    static function redirect($path, $q = "")
    {
        $go = static::$url . $path;
        if ($q) $go .= "?$q";

        header("location: $go");
        exit();
    }
}
