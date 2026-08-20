<?php

namespace PRO\model;

use PRO\core\model;

class user extends model
{
    public function getAll()
    {
        $user = model::db()->rows("SELECT * FROM user");
        return $user;
    }
}
