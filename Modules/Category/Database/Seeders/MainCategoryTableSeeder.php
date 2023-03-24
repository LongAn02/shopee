<?php

namespace Modules\Category\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Category\Entities\MainCategory;

class MainCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $dataMainCategory = [
            ['name' => 'Đồng Hồ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Thời Trang Nam', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Thời Trang Nữ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Giày Dép Nam', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Giày Dép Nữ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Điện Thoại & Phụ Kiện', 'created_at' => now(), 'updated_at' => now()],
        ];

        MainCategory::insert($dataMainCategory);
    }
}
