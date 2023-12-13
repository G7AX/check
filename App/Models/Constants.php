<?php
namespace App;

class Constants
{
    public static function ROOT_DIR($path)
    {
        return (dirname(__DIR__, 2) . $path);
    }
}
