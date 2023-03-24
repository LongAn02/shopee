<?php

namespace Modules\Category\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Category\Entities\SubCategory;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $dataSubCategory = [
            ['name_sub_category' => 'Đồng Hồ Nam', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Đồng Hồ Nữ', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Bộ Đồng Hồ & Đồng Hồ Cặp', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Đồng Hồ Trẻ Em', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Phụ Kiện Đồng Hồ', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            ['name_sub_category' => 'Áo Khoác', 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Áo Vest & Blazer', 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Áo Hoodien, Áo Len & Áo Nỉ', 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Quần Jeans', 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Quần Dài/Quần Âu', 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Áo', 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Áo Ba Lỗ', 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Đồ Lót', 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Đồ Ngủ', 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Cà vạt & Nơ cổ', 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            ['name_sub_category' => 'Quần', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Quần đùi', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Chân váy', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Quần jeans', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Váy cưới', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Áo khoác, Áo choàng & Vest', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Hoodie và Áo nỉ', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Đồ lót', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Đồ ngủ', 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            ['name_sub_category' => 'Bốt', 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Giày Thể Thao/ Sneakers', 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Giày Sục', 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Giày Tây Lười', 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Giày Oxfords & Giày Buộc Dây', 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Xăng-đan và Dép', 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['name_sub_category' => 'Bốt', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Giày Thể Thao/ Sneaker', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Giày Đế Bằng', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Giày Cao Gót', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Giày Đế Xuồng', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Xăng-đan Và Dép', 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],

            ['name_sub_category' => 'Điện thoại', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Máy tính bảng', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Pin Dự Phòng', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Pin Gắn Trong, Cáp và Bộ Sạc', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Ốp lưng, bao da, Miếng dán điện thoại', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Bảo vệ màn hình', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Đế giữ điện thoại', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name_sub_category' => 'Sim', 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
        ];

        SubCategory::insert($dataSubCategory);
    }
}
