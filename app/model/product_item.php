<?php

namespace PRO\model;

use PRO\core\model;

class product_item extends model
{
    public function insert($product_id, $customer_id)
    {
        $product_items = model::db()->insert("product_item", ['product_id' => $product_id, 'customer_id' => $customer_id]);
        return $product_items;
    }
}
