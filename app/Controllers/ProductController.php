<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class ProductController extends BaseController
{
    public function index()
    {
        /*  $model = model(ProductModel::class);

        $data = [
            'products'  => $model->getProducts(),
        ]; */

        $data = ['products' => [

            [
                'id' => 1,
                'name' => 'Product 1',
                'slug' => 'product-1',
                'description' => 'Product 1 Description',
                'price' => 100,
                'image' => 'product-1.jpg',
            ], [
                'id' => 2,
                'name' => 'Product 2',
                'slug' => 'product-2',
                'description' => 'Product 2 Description',
                'price' => 200,
                'image' => 'product-2.jpg',
            ],
            [
                'id' => 3,
                'name' => 'Product 3',
                'slug' => 'product-3',
                'description' => 'Product 3 Description',
                'price' => 300,
                'image' => 'product-3.jpg',
            ]
        ]];

        return view('templates/header')
            . view('templates/sidebar')
            . view('product/index', $data)
            . view('templates/footer');
    }
}
