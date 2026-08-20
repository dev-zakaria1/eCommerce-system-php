<?php

namespace PRO\model;

use PRO\core\model;

class order_items extends model
{
    public function insert($product_id, $order_id)
    {
        $order_items = model::db()->insert("order_items", ['product_id' => $product_id, 'order_id' => $order_id]);
        return $order_items;
    }
}
