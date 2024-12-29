<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArrivalpointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('arrivalpoints')->insert([
            ['arrivalpoint_id' => 1, 'arrivalpoint_name' => 'Cà Mau', 'description' => 'Điểm đến đến Cà Mau', 'status' => 1, 'detail_address' => 'Số 52 Thanh Nghị, Phường Hàm Nghi, Thành phố Cà Mau, Tỉnh Cà Mau', 'one_way' => 1, 'transshipment' => 0],
            ['arrivalpoint_id' => 2, 'arrivalpoint_name' => 'Tiền Giang', 'description' => 'Điểm đến đến Tiền Giang', 'status' => 1, 'detail_address' => 'Đường 10 Tháng 7, Phường 7, Thành phố Mỹ Tho, Tỉnh Tiền Giang', 'one_way' => 1, 'transshipment' => 0],
            ['arrivalpoint_id' => 3, 'arrivalpoint_name' => 'Phú Quốc', 'description' => 'Điểm đến đến Phú Quốc', 'status' => 1, 'detail_address' => 'Đường 20/12, Phường Phú Quốc, Thành phố Phú Quốc, Tỉnh Kiên Giang', 'one_way' => 1, 'transshipment' => 0],
        ]);
    }
}
