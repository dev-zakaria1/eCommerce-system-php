<?php

namespace PRO\controller\admin;

use PRO\core\controller;
use PRO\core\helpers;
use PRO\model\category;
use PRO\model\views;
use PRO\core\session;

class catController extends controller
{
    public function __construct()
    {
        session::start();
        if (empty(session::get('user'))) {
            echo "class not access";
            die;
        }
    }
    public function index()
    {
        $category_user = new views();
        $category_user = $category_user->category_user();
        return $this->view("back/category/category", ['title' => 'zakaria', 'data' => $category_user]);
    }

    public function getAddCategory()
    {
        return $this->view("back\category\addCategory", []);
    }
    public function getUpdateCategory($id)
    {
        $category = new category();
        $category = $category->getOne($id);
        return $this->view("back\category\updateCategory", ['id' => $id, 'category' => $category]);
    }
    public function add()
    {
        $data = [
            'name' => $_POST['name'],
            'icons' => $_POST['icons'],
            'user_id' => $_SESSION['id']
        ];
        $category = new category();
        $category->add($data);
        helpers::redirect("admin/cat/index");
    }

    public function delete($id)
    {
        $category = new category();
        $category = $category->delete($id);
        if ($category == 1) {
            helpers::redirect("admin/cat/index");
        } else {
            echo "error";
        }
    }
    public function update($id)
    {
        $category = new category();
        
        $data = [
            'name' => $_POST['name'],

            'icons' => $_POST['icons'],
            'user_id' => $_SESSION['id']
        ];
        $check = $category->update($data, $id);
        if ($check == 1) {
            helpers::redirect("admin/cat/index");
        } else {
            echo "there is nothing change";
        }
    }
}
