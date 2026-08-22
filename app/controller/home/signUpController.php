<?php

namespace PRO\controller\home;

use PRO\core\controller;
use PRO\core\helpers;
use PRO\core\session;
use PRO\model\customer;

class signUpController extends controller
{
    public function __construct()
    {
        session::start();
    }
    public function index()
    {
        return $this->view("home/signUp", []);
    }
    public function signUp()
    {

        $customer = new customer();

        if (!empty($_POST)) {
            $data = [
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            ];
            $customer = $customer->insert($data);

            if (!empty($customer)) {
                session::set('customerId', $customer);
                helpers::redirect("home/");
            } else {
                echo "there is no data";
            }
        }
    }
}
