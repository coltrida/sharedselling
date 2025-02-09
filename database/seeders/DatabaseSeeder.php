<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        $this->call(UserSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductTagSeeder::class);

        Storage::disk('public')->deleteDirectory('/product');
        Storage::disk('public')->makeDirectory('/product');

        /*Storage::disk('public')->makeDirectory('/product/1');
        Storage::disk('public')->makeDirectory('/product/2');
        Storage::disk('public')->makeDirectory('/product/3');
        Storage::disk('public')->makeDirectory('/product/4');
        Storage::disk('public')->makeDirectory('/product/5');*/
    }
}
