<?php

namespace PRO\controller\home;

use PRO\core\controller;
use PRO\core\helpers;
use PRO\core\session;
use PRO\model\category;
use PRO\model\customer;
use PRO\model\order;
use PRO\model\product;
use PRO\model\views;
use PRO\model\order_items;
use PRO\model\product_item;

class homeController extends controller
{
    public function __construct()
    {
        session::start();
    }
    public function index()
    {
        $productCat = new views();
        $productCat = $productCat->proCat_user();
        $added_latest = new product();
        $added_latest = $added_latest->added_latest();
        $category_name = new category();
        $category_name = $category_name->getname();

        if (isset($_POST['search'])) {
            $product = new product();
            $product = $product->search($_POST['search']);
            return $this->view("home/index", ['product' => $product, 'added_latest' => $added_latest, 'category_name' => $category_name]);
        }
        $sessionCustomer = session::get('customerId');
        return $this->view("home/index", ['product' => $productCat, 'added_latest' => $added_latest, 'category_name' => $category_name, 'sessionCustomer' => $sessionCustomer]);
    }
    public function getCart()
    {
        return $this->view("home/cart", []);
    }
    public function getOrder()
    {

        if (!empty(session::get('customerId'))) {
            if (empty($_POST)) {
                echo "there is on data";
                return;
            }
            $custId = session::get('customerId');
            $orderInfromation = array_map("intval", $_POST);
            $orderInfromation = array_values($orderInfromation);
            $ids = array_filter($orderInfromation, function ($key) {
                return $key % 2 == 0;
            }, ARRAY_FILTER_USE_KEY);
            $ids = array_values($ids);
            $productNumber = array_filter($orderInfromation, function ($key) {
                return $key % 2 != 0;
            }, ARRAY_FILTER_USE_KEY);
            $productNumber = array_values($productNumber);
            $product = new product();
            $product = $product->getAll();
            $filter = array_filter($product, function ($prod) use ($ids) {
                return  in_array($prod->id, $ids);
            });
            $filter = array_values($filter);
            $totalPrice = 0;
            for ($i = 0; $i < count($filter); $i++) {
                $totalPrice += $filter[$i]->price * $productNumber[$i];
            }

            if (!empty($filter)) {
                return $this->view("home/order", ['productIds' => $filter, 'total' => $totalPrice, 'custId' => $custId]);
            } else {
                echo "there is on data";
            }
        } else {
            helpers::redirect("/home/signIn/index");
        }
    }

    public function makeOrder()
    {

        if (empty($_POST)) {
            echo "there is no data here";
            return;
        }
        $product_items = new product_item();

        $order_items = new order_items();
        $order = new order();
        $data = [
            'address' => $_POST['address'],
            'payment_status' => $_POST['payment_status'],
            'total_amount' => $_POST['total'],
            'order_date' => $_POST['order_date'],
            'customer_id' => $_POST['customer_id']
        ];
        $order = $order->insert($data);
        if (!empty($order)) {
            $id = $order;
            $custId = session::get("customerId");
            for ($i = 0; $i < $_POST['numberProduct']; $i++) {
                $order_items->insert($_POST['product_id' . $i], $id);
                $product_items->insert($_POST['product_id' . $i], $custId);
            }
            helpers::redirect("/home");
        }
    }



   
    function getCategories($name)
    {
        $category = new category();
        $category = $category->getCategories($name);
        $productCat = new views();
        $productCat = $productCat->proCat_user();
        $added_latest = new product();
        $added_latest = $added_latest->added_latest();
        $category_name = new category();
        $category_name = $category_name->getname();

        if (isset($_POST['search'])) {
            $product = new product();
            $product = $product->search($_POST['search']);
            return $this->view("home/index", ['product' => $product, 'added_latest' => $added_latest, 'category_name' => $category_name]);
        }
        if (!empty($name)) {
            $category = new views();
            $category = $category->getCategories($name);
            return $this->view("home/index", ['product' => $category, 'added_latest' => $added_latest, 'category_name' => $category_name]);
        }
        return $this->view("home/index", ['product' => $productCat, 'added_latest' => $added_latest, 'category_name' => $category_name]);
    }
}
