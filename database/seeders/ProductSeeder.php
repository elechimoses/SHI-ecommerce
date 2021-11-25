<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => '',
                'description' => '',
                'image' => '',
                'price' => 100
            ],
            [
                'name' => '',
                'description' => '',
                'image' => '',
                'price' => 500
            ],
            [
                'name' => '',
                'description' => '',
                'image' => '',
                'price' => 400
            ],
            [
                'name' => '',
                'description' => '',
                'image' => '',
                'price' => 200
            ]
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}