<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $products[0]->categories()->attach([1,3]);
        $products[1]->categories()->attach([2,4,5]);
        $products[2]->categories()->attach([5]);
        $products[3]->categories()->attach([6]);
    }
}
