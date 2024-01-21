<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // You can adjust the number of categories and their names as needed
         $categories = ['Technology', 'Travel', 'Food', 'Fashion', 'Sports'];

         foreach ($categories as $category) {
             Category::create(['name' => $category]);
         }
    }
}
