<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteDetail extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('route_details')->insert([
            ['route_detail_id' => 1, 
            'route_id' => 1, 
            'point_route1' => 'Bến Xe Miền Tây', 
            'time_route1' => '08:15', 
            'detail_address_point1' => '395 Kinh Dương Vương - Phường An Lạc - Quận Bình Tân - TpHCM', 
            'point_route2' => 'Cầu Rạch Miễu', 
            'time_route2' => '10:55', 
            'detail_address_point2' => 'QL1A, Cái Bè, Tiền Giang', 
            'point_route3' => 'Khu du lịch sinh thái Mỹ Khánh', 
            'time_route3' => '13:23',
            'detail_address_point3' => '13/3 Ấp Mỹ Khánh, Xã Mỹ Khánh, Huyện Phong Điền, TP. Cần Thơ',
            'point_route4' => 'Bến Xe Cà Mau', 
            'time_route4' => '16:10',
            'detail_address_point4' => 'Đường Lý Thường Kiệt, Phường 6, Thành phố Cà Mau'
            ],
            ['route_detail_id' => 2, 
            'route_id' => 2, 
            'point_route1' => 'Bến Xe Miền Tây', 
            'time_route1' => '00:00', 
            'detail_address_point1' => '395 Kinh Dương Vương - Phường An Lạc - Quận Bình Tân - TpHCM', 
            'point_route2' => 'Chưa cập nhật', 
            'time_route2' => '00:00', 
            'detail_address_point2' => 'Chưa cập nhật', 
            'point_route3' => 'Chưa cập nhật', 
            'time_route3' => '00:00',
            'detail_address_point3' => 'Chưa cập nhật',
            'point_route4' => 'Chưa cập nhật', 
            'time_route4' => '00:00',
            'detail_address_point4' => 'Chưa cập nhật'
            ],
            
        ]);
    }
}
