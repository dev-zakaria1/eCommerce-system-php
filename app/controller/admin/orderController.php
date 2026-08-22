<?php

namespace PRO\controller\admin;

use PRO\core\controller;
use PRO\core\helpers;
use PRO\model\category;
use PRO\model\views;
use PRO\model\order;
use PRO\core\session;

class orderController extends controller
{
    public function __construct()
    {
        session::start();
        $this->checkPermission();
    }
    public function index()
    {
        $order_customer = new views();
        $order_customer = $order_customer->order_customer();
        
        $this->view("back/order/order", ['data' => $order_customer]);
    }
    public function getProOrder($id)
    {
        $order_product = new views();
        $order_product = $order_product->order_product($id);
        
        $this->view("back/order/proOrder", ['data' => $order_product, 'id' => $id]);
    }
}
