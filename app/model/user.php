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
    public function countUsers()
    {
        $user = model::db()->rows("SELECT id FROM user");
        $count = count($user);
        return $count;
    }
}
