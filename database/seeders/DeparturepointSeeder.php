<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeparturepointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('departurepoints')->insert([
            ['departurepoint_id' => 1, 'departurepoint_name' => 'Sài Gòn', 'description' => 'Điểm đi xuất phát từ Sài Gòn', 'status' => 1, 'detail_address' => '395 Kinh Dương Vương - Phường An Lạc - Quận Bình Tân - TpHCM', 'one_way' => 1, 'transshipment' => 0],
            ['departurepoint_id' => 2, 'departurepoint_name' => 'Tiền Giang', 'description' => 'Điểm đi xuất phát từ Tiền Giang', 'status' => 1, 'detail_address' => 'Số 42 Đường Ấp Bắc, Thành phố Mỹ Tho, Tỉnh Tiền Giang', 'one_way' => 0, 'transshipment' => 0],
        ]);
    }
}
