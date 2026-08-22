<?php

namespace PRO\controller\admin;

use PRO\core\controller;
use PRO\core\helpers;
use PRO\model\category;
use PRO\model\views;
use PRO\model\order;
use PRO\model\customer;
use PRO\core\session;

class customerController extends controller
{
    public function __construct()
    {
        session::start();
        $this->checkPermission(); 
    }
    public function index()
    {
        $customer = new customer();
        $customer = $customer->getAll();
        $this->view("back/customers/customer", ['data' => $customer]);
    }
    public function getoneCustomer($id)
    {
        $product_customer = new views();
        $product_customer = $product_customer->product_customer($id);
        $this->view("back/customers/proCustomer", ['data' => $product_customer, 'id' => $id]);
    }
}
