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
            ['name' => 'Đồng Hồ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Thời Trang Nam', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Thời Trang Nữ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Giày Dép Nam', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Giày Dép Nữ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Điện Thoại & Phụ Kiện', 'created_at' => now(), 'updated_at' => now()],
        ];

        Category::insert($dataCategory);
    }
}
