<?php

namespace Database\Seeders;

use App\Domains\Category\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataCategory = [
            ['name' => 'Home', 'parent_id' => null,'sequence' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cart', 'parent_id' => null,'sequence' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Category', 'parent_id' => null,'sequence' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Account', 'parent_id' => null,'sequence' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Shoe', 'parent_id' => 3, 'sequence' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Perfume', 'parent_id' => 3, 'sequence' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nike', 'parent_id' => 5, 'sequence' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Adidas', 'parent_id' => 5, 'sequence' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dior', 'parent_id' => 6, 'sequence' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Burberry', 'parent_id' => 6, 'sequence' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Information', 'parent_id' => 4, 'sequence' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Login', 'parent_id' => 4, 'sequence' => 2, 'created_at' => now(), 'updated_at' => now()],
        ];

        Category::insert($dataCategory);
    }
}
