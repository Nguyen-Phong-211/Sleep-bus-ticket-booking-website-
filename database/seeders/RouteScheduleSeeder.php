<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('route_schedules')->insert([
            ['route_schedule_id' => 1, 'route_id' => 1, 'departure_date' => '2024-12-27', 'departure_time' => '08:00:00', 'arrival_time' => '18:30:00', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['route_schedule_id' => 2, 'route_id' => 2, 'departure_date' => '2024-12-28', 'departure_time' => '07:00:00', 'arrival_time' => '15:30:00', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
