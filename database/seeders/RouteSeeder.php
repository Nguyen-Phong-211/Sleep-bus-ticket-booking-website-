<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('routes')->insert([
            ['route_id' => 1, 'departurepoint_id' => 1, 'arrivalpoint_id' => 1, 'type_time_id' => 1, 'total_time' => '08:12:00', 'price' => 290000, 'status' => 1, 'round_trip' => 1, 'one_way' => 1, 'total_km' => 445.5, 'created_at' => now(), 'updated_at' => now()],
            ['route_id' => 2, 'departurepoint_id' => 1, 'arrivalpoint_id' => 3, 'type_time_id' => 1, 'total_time' => '07:30:00', 'price' => 200000, 'status' => 1, 'round_trip' => 1, 'one_way' => 0, 'total_km' => 389, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
