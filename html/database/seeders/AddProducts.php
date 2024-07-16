<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class AddProducts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            //category stationary
            [
                'name'          => 'Pen',
                'category'      => 'stationary',
                'price'         => 1,
                'description'   => 'none',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'Pencil',
                'category'      => 'stationary',
                'price'         => 2,
                'description'   => 'none',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'Book',
                'category'      => 'stationary',
                'price'         => 4,
                'description'   => 'none',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],

            //category vegetable
            [
                'name'          => 'Carrot',
                'category'      => 'vegetable',
                'price'         => 1.5,
                'description'   => 'none',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'Eggplant',
                'category'      => 'vegetable',
                'price'         => 0.5,
                'description'   => 'none',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'Cabbage',
                'category'      => 'vegetable',
                'price'         => 2.5,
                'description'   => 'none',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'Bitter Grout',
                'category'      => 'vegetable',
                'price'         => 3.5,
                'description'   => 'none',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'Broccoli',
                'category'      => 'vegetable',
                'price'         => 4.5,
                'description'   => 'none',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],

            //category fruit
            [
                'name'          => 'Apple',
                'category'      => 'fruit',
                'price'         => 1,
                'description'   => 'none',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'Orange',
                'category'      => 'fruit',
                'price'         => 2,
                'description'   => 'none',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'Banana',
                'category'      => 'fruit',
                'price'         => 3,
                'description'   => 'none',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'Strawberry',
                'category'      => 'fruit',
                'price'         => 3,
                'description'   => 'none',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'name'          => 'Blue Berry',
                'category'      => 'fruit',
                'price'         => 4,
                'description'   => 'none',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
        ];

        Product::insert($products);
    }
}
