<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = Product::create([
                'name' => 'sweater',
                'cost' => 20
            ]);
        $product->users()->attach([2], ['owner' => 1]);
        $product->users()->attach([3], ['owner' => 0]);

        $product = Product::create([
                'name' => 'skirt',
                'cost' => 10
            ]);
        $product->users()->attach([3], ['owner' => 1]);
        $product->users()->attach([2], ['owner' => 0]);

        $product = Product::create([
                'name' => 'trousers',
                'cost' => 40
            ]);
        $product->users()->attach([4], ['owner' => 1]);

        $product = Product::create([
                'name' => 'Sweatshirt',
                'cost' => 50
            ]);
        $product->users()->attach([5], ['owner' => 1]);
    }
}
