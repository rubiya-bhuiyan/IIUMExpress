<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('food_items')->insert([
    [
        'category_id' => 1,
        'name' => 'Chicken Rice',
        'description' => 'Rice served with chicken',
        'price' => 8.50,
        'image' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'category_id' => 2,
        'name' => 'Iced Milo',
        'description' => 'Cold chocolate malt drink',
        'price' => 3.00,
        'image' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);
    }
}
