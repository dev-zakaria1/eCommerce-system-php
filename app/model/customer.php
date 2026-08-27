<?php

namespace PRO\model;

use PRO\core\model;

class customer extends model
{
    public function getAll()
    {
        $customer = model::db()->rows(" SELECT * FROM `customer` ");
        return $customer;
    }
    public function insert($data)
    {
        $customer = model::db()->insert("customer", $data);
        return $customer;
    }
    public function getOne($id)
    {
        $customer = model::db()->row("SELECT * from customer WHERE id=?", $id);
        return $customer;
    }
    public function countCustomers()
    {
        $customer = model::db()->rows("SELECT id FROM customer");
        $count = count($customer);
        return $count;
    }
}
