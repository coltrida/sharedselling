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
                'surname' => 'admin',
                'address' => 'via Colombo 2',
                'city' => 'Rome',
                'province' => 'RM',
                'zip' => '06012',
                'country' => 'Italy',
                'privacy' => 1,
                'email' => 'admin@admin.it',
                'password' => Hash::make('123456'),
                'role' => '1',
                'balance' => 0,
                'email_verified_at' => now()
            ],
            [
                'name' => 'cacao',
                'surname' => 'cacao',
                'address' => 'via Lunga 4',
                'city' => 'Milano',
                'province' => 'MI',
                'zip' => '02100',
                'country' => 'Italy',
                'privacy' => 1,
                'email' => 'cacao@cacao.it',
                'password' => Hash::make('123456'),
                'role' => '0',
                'balance' => 10000,
                'email_verified_at' => now()
            ],
            [
                'name' => 'cacao2',
                'surname' => 'cacao2',
                'address' => 'via Magellano 32',
                'city' => 'Roma',
                'province' => 'RM',
                'zip' => '06010',
                'country' => 'Italy',
                'privacy' => 1,
                'email' => 'cacao2@cacao.it',
                'password' => Hash::make('123456'),
                'role' => '0',
                'balance' => 20.5,
                'email_verified_at' => now()
            ],
        ]);


        User::factory(100)->create();
    }
}
