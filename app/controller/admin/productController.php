<?php

namespace PRO\controller\admin;

use PRO\core\controller;
use PRO\core\helpers;
use PRO\core\session;
use PRO\model\product;
use PRO\model\views;
use PRO\model\category;

class productController extends controller
{
    public function __construct()
    {
        session::start();
        $this->checkPermission();
    }
    public function index()
    {
        $product = new views();
        $product = $product->proCat_user();
        return $this->view("back\products\product", ['data' => $product]);
    }
    public function getAddProduct()
    {
        $category = new category();
        $category = $category->getAll();

        return $this->view("back\products\addProduct", ['data' => $category]);
    }
    public function getUpdateProduct($id)
    {
        $product = new views();
        $category = new category();
        $catOne = new product();
        $product = $product->getOneProCat_user($id);
        $category = $category->getAll();
        $catOne = $catOne->getOne($id);
        return $this->view("back\products\updateProduct", ['id' => $id, 'category' => $category, 'product' => $product, 'catOne' => $catOne]);
    }
    public function add()
    {
        $product = new product();
        if (!empty($_FILES['img'])) {
            $nameImg = $_FILES['img']['name'];
            $tmp_name = $_FILES['img']['tmp_name'];
            move_uploaded_file($tmp_name, ROOT . "public\back\upload\images\\" . $nameImg);
        } else {
            $nameImg = '';
            $tmp_name = '';
        }
        $data = [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'img' => $nameImg,
            'user_id' => $_SESSION['id'],
            'category_id' => $_POST['category_id']
        ];
        $product = $product->addProduct($data);
        helpers::redirect("admin/product/index");
    }
    public function delete($id)
    {
        $get = new product();
        $product = new product();
        $get = $get->getOne($id);
        $nameImg = $get->img;
        $product = $product->delete($id);
        if ($product == 1) {
            helpers::deleteimg($nameImg);
            helpers::redirect("admin/product/index");
        } else {
            echo "error";
        }
    }
    public function update($id)
    {
        $product = new product();
        $get = new product();
        $get = $get->getOne($id);
        if (!empty($_FILES['img']['name'])) {
            if (!empty($get->img)) {
                helpers::deleteimg($get->img);
            }
            $nameImg = $_FILES['img']['name'];
            $tmp_name = $_FILES['img']['tmp_name'];
            move_uploaded_file($tmp_name, ROOT . "public\back\upload\images\\" . $nameImg);
            $data = [
                'name' => $_POST['name'],
                'img' => $nameImg,
                'price' => $_POST['price'],
                'category_id' => $_POST['category_id'],
                'user_id' => $_SESSION['id']
            ];
        } else {
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'category_id' => $_POST['category_id'],
                'user_id' => $_SESSION['id']
            ];
        }
        $check = $product->update($data, $id);
        if ($check == 1) {
            helpers::redirect("admin/product/index");
        } else {
            echo "there is nothing change";
        }
    }
    function deleteImg()
    {
        helpers::deleteimg("e-commerce.webp");
    }
}
