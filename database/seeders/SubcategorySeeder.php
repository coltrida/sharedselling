<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subcategory::insert([
            [
                'name' => 'man sweater',
                'category_id' => 1
            ],
            [
                'name' => 'woman sweater',
                'category_id' => 2
            ],
            [
                'name' => 'skirt',
                'category_id' => 2
            ],
            [
                'name' => 'man trousers',
                'category_id' => 1
            ],
            [
                'name' => 'woman trousers',
                'category_id' => 2
            ],
            [
                'name' => 'man shoes',
                'category_id' => 1
            ],
            [
                'name' => 'woman shoes',
                'category_id' => 2
            ],
            [
                'name' => 'phones',
                'category_id' => 3
            ],
            [
                'name' => 'tv',
                'category_id' => 3
            ],
            [
                'name' => 'tablet',
                'category_id' => 3
            ],
        ]);
    }
}
