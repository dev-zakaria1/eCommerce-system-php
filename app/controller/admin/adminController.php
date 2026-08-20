<?php

namespace PRO\controller\admin;

use PRO\core\controller;
use PRO\core\helpers;
use PRO\core\session;

class adminController extends controller
{
    public function __construct()
    {
        session::start();
        if (empty(session::get('user'))) {
            helpers::redirect("admin/signUp");
        }
        
    }
    public function index()
    {
        return $this->view("back/index", []);
    }
}
