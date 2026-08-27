<?php

namespace PRO\model;

use PRO\core\model;

class product extends model
{
    public function getAll()
    {
        $product = $this->db()->rows("SELECT * FROM product");
        return $product;
    }
    public function geIds()
    {
        $ids = $this->db()->rows("SELECT product.id FROM product");
        return $ids;
    }
    public function getOne($id)
    {
        $product = $this->db()->row("SELECT * FROM product WHERE id=$id");
        return $product;
    }
    public function addProduct($data)
    {
        $product = $this->db()->insert("product", $data);
        return $product;
    }
    public function delete($id)
    {
        $product = $this->db()->delete("product", ['id' => $id]);
        return $product;
    }
    public function update($data, $id)
    {
        $product = $this->db()->update("product", $data, ['id' => $id]);
        return $product;
    }
    public function search($search)
    {
        $search = $this->db()->rows("SELECT product.* ,category.name as catName FROM `product` INNER JOIN category ON category.id= product.category_id WHERE product.name LIKE '%$search%'");
        return $search;
    }
    public function added_latest()
    {
        $added_latest = $this->db()->rows("SELECT product.img FROM product ORDER BY id DESC LIMIT 3");
        return $added_latest;
    }
    public function countProducts()
    {
        $product = model::db()->rows("SELECT id FROM product");
        $count = count($product);
        return $count;
    }
}
