<?php

namespace PRO\controller\admin;

use PRO\core\controller;
use PRO\core\helpers;
use PRO\model\user;
use PRO\core\session;

class userController extends controller
{
    public function __construct()
    {
        session::start();
    }
    public function getSignUp()
    {
        return $this->view("back/auth/signIn", []);
    }
    public function getSignIn()
    {
        return $this->view("back/auth/signIn", []);
    }
    public function signUp()
    {
        $user = new user();
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];
        session::set('user', $data);
        $user = $user->db()->insert("user", $data);
        session::set('id', $user);
        helpers::redirect('/admin');
    }
    public function signIn()
    {
        $user = new user();
        $users = $user->getAll();
        foreach ($users as $v) {
            if ($v->email == $_POST['email'] && $v->password == $_POST['password']) {
                session::set('user', $v);
                break;
            }
        }
        if (empty(session::get('user'))) {
            helpers::redirect("admin/user/getSignIn");
        } else {
            session::set('id', $v->id);
            helpers::redirect("admin/");
        }
    }
    public function log_out()
    {
        session::stop();
        helpers::redirect("admin/user/getSignIn");
    }
}
