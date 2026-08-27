<?php

namespace PRO\controller\admin;

use PRO\core\controller;
use PRO\core\helpers;
use PRO\core\session;
use PRO\model\customer;
use PRO\model\order;
use PRO\model\product;
use PRO\model\user;

class adminController extends controller
{
    public function __construct()
    {
        session::start();
        $this->checkPermission();
    }
    public function index()
    {

        $Orders = new order();
        $numbersCustomers = new customer();
        $numbersUsers = new user();
        $numbersProduct = new product();
        $numbersOrders = $Orders->CoutOrders();
        $numbersCustomers = $numbersCustomers->countCustomers();
        $numbersProduct = $numbersProduct->countProducts();
        $numbersUsers = $numbersUsers->countUsers();
        $latestOrders = $Orders->latestOrders();
        return $this->view("back/index", [
            'numbersOrders' => $numbersOrders,
            'numbersCustomers' => $numbersCustomers,
            'numbersProducts' => $numbersProduct,
            'numbersUsers' => $numbersUsers,
            'latestOrders' => $latestOrders
        ]);
    }
}
