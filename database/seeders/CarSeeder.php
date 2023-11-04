<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Car::create([
            'name' => 'sigra',
            'person' => 6,
            'harga' => 100000,
            'path' => '/assets/img/car4.png',
            'is_available' => 1,
        ]);
    }
}
