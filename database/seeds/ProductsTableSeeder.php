<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = "https://dummyjson.com/products?limit=0";
        $json = file_get_contents($url);
        $data = json_decode($json, true);

        foreach ($data['products'] as $item) {
            Product::create([
                'name' => $item['title'],
                'slug' => Str::slug($item['title']),
                'details' => 'Brand: ' . $item['brand'],
                'price' => $item['price'],
                'category_id' => rand(1, 6),
                'image' => $item['thumbnail'],
                'images' => json_encode($item['images']),
                'description' => $item['description'],
                'quantity' => $item['stock']
            ]);
        }

        // Update featured
        $products = Product::all();

        foreach ($products as $product) {
            if ($product->id % 3 == 0) {
                $product->featured = true;
                $product->save();
            }
        }
    }
}
