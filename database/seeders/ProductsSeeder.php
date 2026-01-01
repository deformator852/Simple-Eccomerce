<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Product 1', 'price' => 10.99, 'stock_quantity' => 1],
            ['name' => 'Product 2', 'price' => 15.50, 'stock_quantity' => 40],
            ['name' => 'Product 3', 'price' => 7.99, 'stock_quantity' => 30],
            ['name' => 'Product 4', 'price' => 20.00, 'stock_quantity' => 25],
            ['name' => 'Product 5', 'price' => 12.75, 'stock_quantity' => 60],
            ['name' => 'Product 6', 'price' => 18.20, 'stock_quantity' => 15],
            ['name' => 'Product 7', 'price' => 9.50, 'stock_quantity' => 70],
            ['name' => 'Product 8', 'price' => 25.00, 'stock_quantity' => 10],
            ['name' => 'Product 9', 'price' => 14.30, 'stock_quantity' => 0],
            ['name' => 'Product 10', 'price' => 11.99, 'stock_quantity' => 55],
        ];
        DB::table('products')->insert($products);
    }
}
