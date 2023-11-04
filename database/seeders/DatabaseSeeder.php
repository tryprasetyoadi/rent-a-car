<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CarSeeder::class);
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'address' => 'Bandung',
            'levelling' => 0
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'example@test.com',
            'username' => 'user1',
            'password' => Hash::make('password'),
            'address' => 'Bandung',
            'levelling' => 1
        ]);
    }
}
