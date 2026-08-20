<?php

namespace PRO\controller\admin;

use PRO\core\controller;

class signInController extends controller
{
    public function index()
    {
        return $this->view("back/auth/signIn", []);
    }
}
