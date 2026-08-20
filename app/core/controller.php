<?php

namespace PRO\core;

class controller
{
    public function view($path, $info)
    {
        extract($info);
        require_once(VIEW . $path . ".php");
    }
}


