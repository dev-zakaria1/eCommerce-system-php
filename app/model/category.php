<?php

namespace PRO\model;

use PRO\core\model;

class category extends model
{
    public function getAll()
    {
        $category = $this->db()->rows("SELECT * FROM category");
        return $category;
    }
    public function getCategories($category)
    {
        $category = $this->db()->rows("SELECT * FROM category WHERE name='$category' ");
        return $category;
    }
    public function getname()
    {
        $category = $this->db()->rows("SELECT category.name FROM category");
        return $category;
    }

    public function getOne($id)
    {
        $category = $this->db()->row("SELECT * FROM category WHERE id =$id");
        return $category;
    }
    public function add($data)
    {
        $category = $this->db()->insert('category', $data);
        return $category;
    }
    public function delete($id)
    {
        $category = $this->db()->delete("category", ['id' => $id]);
        return $category;
    }
    public function update($data, $id)
    {
        $category = $this->db()->update("category", $data, ['id' => $id]);
        return $category;
    }
}
