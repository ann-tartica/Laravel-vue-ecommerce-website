<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'name' => 'Vintage Silk Dress',
                'slug' => 'vintage-silk-dress',
                'description' => 'One-of-a-kind silk dress from a couture archive.',
                'price_cents' => 75000,
                'stock' => 1,
                'sku' => 'MAER-001',
                'image' => null,
            ],
            [
                'name' => 'Tailored Wool Coat',
                'slug' => 'tailored-wool-coat',
                'description' => 'High-fashion tailored wool coat with original label.',
                'price_cents' => 120000,
                'stock' => 1,
                'sku' => 'MAER-002',
                'image' => null,
            ],
            [
                'name' => 'Limited Edition Blouse',
                'slug' => 'limited-edition-blouse',
                'description' => 'Rare blouse with delicate embroidery.',
                'price_cents' => 35000,
                'stock' => 2,
                'sku' => 'MAER-003',
                'image' => null,
            ],
        ];

        foreach ($items as $i) {
            Product::create($i);
        }
    }
}
