<?php

namespace PRO\controller\home;

use PRO\core\controller;
use PRO\core\helpers;
use PRO\core\session;

class logoutController extends controller
{
    function __construct()
    {
        session::start();
    }
    public function logout()
    {
        session::stop();
        helpers::redirect('/home/home/index');
    }
}
