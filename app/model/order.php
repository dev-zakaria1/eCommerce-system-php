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
    // public function insert1($address, $payment_status, $order_date, $total_amount, $customer_id)
    // {
    //     $order = model::db()->row("INSERT INTO `order`( address, payment_status, order_date, total_amount, customer_id) VALUES ('$address', '$payment_status', '$order_date', '$total_amount', '$customer_id')");
    //     return $order;
    // }
}
