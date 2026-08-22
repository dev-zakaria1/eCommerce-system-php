<?php

namespace PRO\core;

class controller
{
    public function view($path, $info)
    {
        extract($info);
        require_once(VIEW . $path . ".php");
    }
    public function checkPermission()
    {
        if (empty(session::get('user'))) {
            echo "you are not allowed in here";
            die;
        }
    }
}
