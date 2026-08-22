<?php

namespace PRO\controller\home;

use PRO\core\controller;
use PRO\core\helpers;
use PRO\core\session;
use PRO\model\customer;

class signInController extends controller
{
    function __construct()
    {
        session::start();
    }
    public function index()
    {
        return $this->view("home/signIn", []);
    }
    public function signIn()
    {
        $customer = new customer();
        $customer = $customer->getAll();
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        $customer = array_filter($customer, function ($cust) use ($data) {

            return $cust->email === $data['email'] && $cust->password === $data['password'];
        });

        if (!empty($customer)) {

            session::set('customerId', $customer[0]->id);
            helpers::redirect("home/");
        } else {
            helpers::redirect("home/signIn/index");
        }
    }
}
