<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Bourn Vita',
                'description' => 'Energy',
                'image' => 'https://www.madbananas.in/wp-content/uploads/2017/10/bournvita-jar-v-1-kg-1-4.png',
                'price' => 80
            ],
            [
                'name' => 'Dark Fantasy',
                'description' => 'Chocolate',
                'image' => 'https://cdn.shakedeal.com/images/detailed/540/SDPAS0011900_puno-6m.png',
                'price' => 300
            ],
            [
                'name' => 'Nutraj California Whole Walnut (Akrod)',
                'description' => 'Akrod',
                'image' => 'https://m.media-amazon.com/images/I/716mQh6TR4L.jpg',
                'price' => 280
            ],
            [
                'name' => 'Mamaearth Onion & Plant Keratin',
                'description' => 'Onion & Plant',
                'image' => 'https://images.mamaearth.in/catalog/product/o/n/onion_shampoo_1_ltr_1_white_bg.jpg',
                'price' => 200
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
