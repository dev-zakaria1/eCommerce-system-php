<?php

namespace PRO\core;

use Dcblogdev\PdoWrapper\Database;

class model
{

    public function db()
    {
        $option = [
            'host' => 'localhost',
            'database' => 'shop',
            'type' => 'mysql',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'port' => '3306',
        ];
        return $option = new Database($option);
    }
}
