<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['title' => 'Shoes', 'slug' => 'shoes', 'parent_id' => 0],
            ['title' => 'Jeans', 'slug' => 'jeans', 'parent_id' => 0],
            ['title'=> 'Sportswear', 'slug' => 'sportswear', 'parent_id' => 0],
            ['title'=> 'Coats', 'slug' => 'coats', 'parent_id' => 0],
            ['title'=> 'Shirts', 'slug' => 'shirts', 'parent_id' => 0],
            ['title'=> 'Men\'s Sportswear', 'slug' => 'mens-sportswear', 'parent_id' => 3],
            ['title'=> 'Women\'s Sportswear', 'slug' => 'womens-sportswear', 'parent_id' => 3],
            ['title'=> 'Baby\'s Sportswear', 'slug' => 'babys-sportswear', 'parent_id' => 3],
        ]);
    }
}
