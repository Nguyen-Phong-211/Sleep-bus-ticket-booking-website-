<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('vehicles')->insert([
            ['vehicle_id' => 1, 'vehicle_name' => 'Hoàng Kim Limousine', 'license_plate' => '51D-678.90', 'type_vehicle_id' => 1, 'purpose_of_use' => 1, 'color' => 'Xanh lá', 'fuel_per_100' => 10, 'fuel_name' => 'Xăng', 'number_of_km' => 45000, 'number_of_rent' => 0, 'max_seat' => 24, 'image' => '51D-678.90.png', 'route_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['vehicle_id' => 2, 'vehicle_name' => 'Ngọc Lan Giường Nằm', 'license_plate' => '29B-123.45', 'type_vehicle_id' => 2, 'purpose_of_use' => 1, 'color' => 'Vàng', 'fuel_per_100' => 15, 'fuel_name' => 'Xăng', 'number_of_km' => 56000, 'number_of_rent' => 0, 'max_seat' => 41, 'image' => '29B-123.45.png', 'route_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
