<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('categories')->insert([
    [
        'name' => 'Rice',
        'description' => 'Rice-based meals',
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'Drinks',
        'description' => 'Cold and hot beverages',
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);
    }
}
