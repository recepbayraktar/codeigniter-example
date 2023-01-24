<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    public function getProducts($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $id])->first();
    }
}