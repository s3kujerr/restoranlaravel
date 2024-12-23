<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Check if user exists before creating
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

        $products = [
            [
                'name' => 'Nasi Goreng',
                'price' => 25000,
                'description' => 'Nasi goreng spesial',
                'category' => 'food'
            ],
            [
                'name' => 'Es Teh',
                'price' => 5000,
                'description' => 'Es teh manis',
                'category' => 'beverage'
            ],
            [
                'name' => 'Sambal',
                'price' => 15000,
                'description' => 'Sambal',
                'category' => 'other'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}