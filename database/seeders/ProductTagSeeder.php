<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $products[0]->tags()->attach([1,3]);
        $products[1]->tags()->attach([2,4,5]);
        $products[2]->tags()->attach([5]);
        $products[3]->tags()->attach([6]);
    }
}
