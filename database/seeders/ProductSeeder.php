<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Seeder Product',
            'description' => 'Inserted via Seeder',
            'price' => 199.99,
            'stock_quantity' => 30,
        ]);
    }
}
