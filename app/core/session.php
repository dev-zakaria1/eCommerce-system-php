<?php

namespace PRO\core;

class session
{
    public static function start()
    {
        @session_start();
    }
    public static function stop()
    {
        session_destroy();
    }
    public static function set($user, $data)
    {
        $_SESSION[$user] = $data;
    }
    public static function get($user)
    {
        if (!empty($_SESSION[$user])) {
            return $_SESSION[$user];
        }
    }
}
