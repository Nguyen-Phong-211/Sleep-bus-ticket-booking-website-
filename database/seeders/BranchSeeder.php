<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('branches')->insert([
            ['branch_id' => 1, 'branch_name' => 'Trạm Sài Gòn', 'address' => '395 Kinh Dương Vương - Phường An Lạc - Quận Bình Tân - TpHCM', 'number_phone' => '0986737444', 'created_at' => now(), 'updated_at' => now()],
            ['branch_id' => 2, 'branch_name' => 'Trạm Tiền Giang', 'address' => '42 Đường Ấp Bắc, Thành phố Mỹ Tho, Tỉnh Tiền Giang', 'number_phone' => '0824002333', 'created_at' => now(), 'updated_at' => now()],
            ['branch_id' => 3, 'branch_name' => 'Trạm Đồng Tháp', 'address' => '123 Nguyễn Huệ, Phường 1, Thành phố Cao Lãnh, Tỉnh Đồng Tháp', 'number_phone' => '0854223441', 'created_at' => now(), 'updated_at' => now()],
            ['branch_id' => 4, 'branch_name' => 'Trạm Kiên Giang', 'address' => 'Số 789, Đường Trần Hưng Đạo, Phường Vĩnh Lợi, Thành phố Rạch Giá, Tỉnh Kiên Giang', 'number_phone' => '0838678666', 'created_at' => now(), 'updated_at' => now()],
            ['branch_id' => 5, 'branch_name' => 'Trạm Cà Mau', 'address' => 'Số 123, Đường Nguyễn Huệ, Phường 1, Thành phố Cà Mau, Tỉnh Cà Mau', 'number_phone' => '0947555343', 'created_at' => now(), 'updated_at' => now()],
            ['branch_id' => 6, 'branch_name' => 'Trạm Bạc Liêu', 'address' => 'Số 456, Đường Lê Duẩn, Phường 3, Thành phố Bạc Liêu, Tỉnh Bạc Liêu', 'number_phone' => '0862302448', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
