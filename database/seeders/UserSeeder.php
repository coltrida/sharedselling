<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.it',
                'password' => Hash::make('123456'),
                'role' => '1',
                'balance' => 0
            ],
            [
                'name' => 'cacao',
                'email' => 'cacao@cacao.it',
                'password' => Hash::make('123456'),
                'role' => '0',
                'balance' => 10000
            ],
            [
                'name' => 'cacao2',
                'email' => 'cacao2@cacao.it',
                'password' => Hash::make('123456'),
                'role' => '0',
                'balance' => 20.5
            ],
        ]);
    }
}
