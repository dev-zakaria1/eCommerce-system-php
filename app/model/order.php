<?php

namespace PRO\model;

use PRO\core\model;

class order extends model
{
    public function getAll()
    {
        $order = model::db()->rows(" SELECT * FROM `order` ");
        return $order;
    }
    public function insert($data)
    {
        $order = model::db()->insert(" `order` ", $data);
        return $order;
    }
    public function CoutOrders()
    {
        $order = model::db()->rows("SELECT id FROM `order`");
        $count = count($order);
        return $count;
    }
    public function latestOrders()
    {
        $order = model::db()->rows("SELECT `order`.*,customer.name FROM `order` JOIN customer ON customer.id=`order`.customer_id ORDER BY id DESC limit 6");
        return $order;
    }
}
