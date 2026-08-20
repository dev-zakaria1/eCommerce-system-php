<?php

namespace PRO\model;

use PRO\core\model;

class views extends model
{


    public function category_user()
    {
        $category_user = model::db()->rows("SELECT * FROM category_user");
        return $category_user;
    }
    public function getCategories($category)
    {
        $category = $this->db()->rows("SELECT * FROM procat_user WHERE catName='$category' ");
        return $category;
    }
    public function proCat_user()
    {
        $proCat_user = model::db()->rows("SELECT * FROM proCat_user");
        return $proCat_user;
    }
    public function getOneProCat_user($id)
    {
        $proCat_user = model::db()->row("SELECT * FROM proCat_user WHERE id=$id");
        return $proCat_user;
    }
    public function order_customer()
    {
        $order_customer = model::db()->rows("SELECT * FROM order_customer");
        return $order_customer;
    }
    public function order_product($id)
    {
        $order_product = model::db()->rows("SELECT * FROM order_product WHERE id=$id");
        return $order_product;
    }
    public function product_customer($id)
    {
        $product_customer = model::db()->rows("SELECT * FROM product_customer WHERE id=$id");
        return $product_customer;
    }
}
