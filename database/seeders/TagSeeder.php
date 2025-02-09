<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::insert([
            [
                'name' => 'sm',
                'subcategory_id' => 1
            ],
            [
                'name' => 'sm',
                'subcategory_id' => 2
            ],
            [
                'name' => 'sm',
                'subcategory_id' => 3
            ],
            [
                'name' => 'sm',
                'subcategory_id' => 4
            ],
            [
                'name' => 'sm',
                'subcategory_id' => 5
            ],
            [
                'name' => 'xl',
                'subcategory_id' => 1
            ],
            [
                'name' => 'xl',
                'subcategory_id' => 2
            ],
            [
                'name' => 'xl',
                'subcategory_id' => 3
            ],
            [
                'name' => 'xl',
                'subcategory_id' => 4
            ],
            [
                'name' => 'xl',
                'subcategory_id' => 5
            ],
            [
                'name' => 'white',
                'subcategory_id' => 1
            ],
            [
                'name' => 'white',
                'subcategory_id' => 2
            ],
            [
                'name' => 'white',
                'subcategory_id' => 3
            ],
            [
                'name' => 'white',
                'subcategory_id' => 4
            ],
            [
                'name' => 'white',
                'subcategory_id' => 5
            ],
            [
                'name' => 'pink',
                'subcategory_id' => 1
            ],
            [
                'name' => 'pink',
                'subcategory_id' => 2
            ],
            [
                'name' => 'pink',
                'subcategory_id' => 3
            ],
            [
                'name' => 'pink',
                'subcategory_id' => 4
            ],
            [
                'name' => 'pink',
                'subcategory_id' => 5
            ],
            [
                'name' => '38',
                'subcategory_id' => 6
            ],
            [
                'name' => '38',
                'subcategory_id' => 7
            ],
            [
                'name' => '39',
                'subcategory_id' => 6
            ],
            [
                'name' => '39',
                'subcategory_id' => 7
            ],
            [
                'name' => '40',
                'subcategory_id' => 6
            ],
            [
                'name' => '40',
                'subcategory_id' => 7
            ],
            [
                'name' => 'Samsung',
                'subcategory_id' => 8
            ],
            [
                'name' => 'Apple',
                'subcategory_id' => 8
            ],
            [
                'name' => '6 inc',
                'subcategory_id' => 8
            ],
            [
                'name' => '40 inc',
                'subcategory_id' => 9
            ],
            [
                'name' => '50 inc',
                'subcategory_id' => 9
            ],
            [
                'name' => 'dark',
                'subcategory_id' => 10
            ],
            [
                'name' => 'wifi',
                'subcategory_id' => 10
            ],
            [
                'name' => 'green',
                'subcategory_id' => 1
            ],
            [
                'name' => 'green',
                'subcategory_id' => 3
            ],
        ]);
    }
}
