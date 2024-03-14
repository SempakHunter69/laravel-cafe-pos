<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Reyhan',
            'email' => 'rey.reyhans69@gmail.com',
            'password' => Hash::make('ehansempak69'),
            'phone' => '081244736610',
            'roles' => 'ADMIN',
        ]);
    }
}