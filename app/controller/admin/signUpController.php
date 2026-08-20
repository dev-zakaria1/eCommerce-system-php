<?php

namespace PRO\controller\admin;

use PRO\core\controller;
use PRO\core\model;

class signUpController extends controller
{
    public function index()
    {
        return $this->view("back/auth/signUp", []);
    }
   
}
