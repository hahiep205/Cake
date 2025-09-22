<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Product::create([
            'product_name' => 'Chocolate Cake',
            'price' => 25.99,
            'stock' => 10,
            'description' => 'Delicious chocolate cake with rich cocoa flavor',
            'image' => 'cakenew1-1.jpg'
        ]);

        Product::create([
            'product_name' => 'Vanilla Cake',
            'price' => 22.99,
            'stock' => 15,
            'description' => 'Classic vanilla cake with smooth vanilla taste',
            'image' => 'cakenew2-1.jpg'
        ]);

    }
}