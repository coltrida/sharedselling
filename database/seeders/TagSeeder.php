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
        $tag = Tag::create(
            [
                'name' => 'sm',
            ]);
        $tag->subcategories()->attach([1,2,3,4,5]);

        $tag = Tag::create([
                'name' => 'xl',
            ]);
        $tag->subcategories()->attach([1,2,3,4,5]);

        $tag = Tag::create([
                'name' => 'white',
            ]);
        $tag->subcategories()->attach([1,2,3,4,5]);

        $tag = Tag::create([
                'name' => 'pink',
            ]);
        $tag->subcategories()->attach([1,2,3,4,5]);

        $tag = Tag::create([
                'name' => '38',
            ]);
        $tag->subcategories()->attach([6,7]);

        $tag = Tag::create([
                'name' => '39',
            ]);
        $tag->subcategories()->attach([6,7]);

        $tag = Tag::create([
                'name' => '40',
            ]);
        $tag->subcategories()->attach([6,7]);

        $tag = Tag::create([
                'name' => 'Samsung',
            ]);
        $tag->subcategories()->attach([8,9,10]);

        $tag = Tag::create([
                'name' => 'Apple',
            ]);
        $tag->subcategories()->attach([8, 10]);

        $tag = Tag::create([
                'name' => '6 inc',
            ]);
        $tag->subcategories()->attach([10]);

        $tag = Tag::create([
                'name' => '40 inc',
            ]);
        $tag->subcategories()->attach([9]);

        $tag = Tag::create([
                'name' => '50 inc',
            ]);
        $tag->subcategories()->attach([9]);

        $tag = Tag::create([
                'name' => 'dark',
            ]);
        $tag->subcategories()->attach([1,2,3,4]);

        $tag = Tag::create([
                'name' => 'wifi',
            ]);
        $tag->subcategories()->attach([10]);

        $tag = Tag::create([
                'name' => 'green',
            ]);
        $tag->subcategories()->attach([1,2,3,4]);
    }
}
