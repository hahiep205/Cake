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

        /*
        *** Tạo product mới, seed lên table products ở database.
        */
        Product::create([
            'product_id' => 'NMC-2509',
            'product_name' => 'Nama Matcha Chocolate',
            'price' => 25.99,
            'stock' => 10,
            'description' => 'Delicious matcha chocolate cake with the rich flavor of green tea and chocolate.',
            'image' => 'cake1-1.jpg'
        ]);

        Product::create([
            'product_id' => 'OLC-2509',
            'product_name' => 'Olong Longan Cake',
            'price' => 22.99,
            'stock' => 15,
            'description' => 'The refreshing taste of olong combined with the sweetness of longan fruit.',
            'image' => 'cake2-1.jpg'
        ]);

        Product::create([
            'product_id' => 'PBC-2509',
            'product_name' => 'Pudding Blueberry Cake',
            'price' => 22.99,
            'stock' => 15,
            'description' => 'Fresh blueberry cake with real pudding vani pieces.',
            'image' => 'cake3-1.jpg'
        ]);

        Product::create([
            'product_id' => 'CCC-2509',
            'product_name' => 'Chestnut Cheese Cake',
            'price' => 22.99,
            'stock' => 15,
            'description' => 'The creaminess of mascarpone cheese combined with the rich flavor of pistachios.',
            'image' => 'cake4-1.jpg'
        ]);

        Product::create([
            'product_id' => 'COSIK-2509',
            'product_name' => 'Choco Oreo Salty Ice Cake',
            'price' => 22.99,
            'stock' => 15,
            'description' => 'The cake base is soft and rich in fresh chocolate flavor, with creamy whipping cream and Oreo.',
            'image' => 'cake5-1.jpg'
        ]);

        Product::create([
            'product_id' => 'PTLCC-2509',
            'product_name' => 'Pink Tea & Lemon Cheese Cake',
            'price' => 22.99,
            'stock' => 15,
            'description' => 'Lemon cheesecake with rose tea, an appealing sweet and sour flavor.',
            'image' => 'cakenew1-1.jpg'
        ]);

        Product::create([
            'product_id' => 'BVDC-2509',
            'product_name' => 'Blueberry Vanilla Dream Cake',
            'price' => 22.99,
            'stock' => 15,
            'description' => 'A fluffy layer of vanilla cream blended with fresh blueberries, sweet and poetic.',
            'image' => 'cakenew2-1.jpg'
        ]);

    }
}