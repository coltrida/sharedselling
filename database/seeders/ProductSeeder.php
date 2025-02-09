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
                'description' => 'A sweater is a knitted or crocheted garment designed to cover the upper part of the body and arms. Typically made from wool, cotton, or synthetic fibers, sweaters come in various styles, including pullovers and cardigans. ',
                'cost' => 20,
                'subcategory_id' => 1
            ]);
        $product->users()->attach([2], ['owner' => 1]);
        $product->users()->attach([3], ['owner' => 0]);

        $product = Product::create([
                'name' => 'skirt',
                'description' => 'A skirt is a piece of clothing worn from the waist down, typically covering the lower part of the body',
                'cost' => 10,
                'subcategory_id' => 2
                ]);
        $product->users()->attach([3], ['owner' => 1]);
        $product->users()->attach([2], ['owner' => 0]);

        $product = Product::create([
                'name' => 'trousers',
                'description' => 'Trousers, also known as pants, are a type of clothing worn on the lower half of the body, covering from the waist down to the ankles',
                'cost' => 40,
                'subcategory_id' => 4
            ]);
        $product->users()->attach([4], ['owner' => 1]);

        $product = Product::create([
                'name' => 'Sweatshirt',
                'description' => 'A sweatshirt is a casual, comfortable, long-sleeved garment typically made from cotton, fleece, or a blend of both. It is designed to provide warmth and is often worn for leisure, sports, or casual outings.',
                'cost' => 50,
                'subcategory_id' => 2
            ]);
        $product->users()->attach([5], ['owner' => 1]);
    }
}
