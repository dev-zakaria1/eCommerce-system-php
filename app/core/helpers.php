<?php

namespace PRO\core;

class helpers
{
    public static function redirect($path)
    {
        header("Location:" . DOMAIN_NAME . $path);
    }
    public static function  deleteimg($nameImg)
    {
        unlink(ROOT . "\public\back\upload\images\\" . $nameImg);
    }
}
