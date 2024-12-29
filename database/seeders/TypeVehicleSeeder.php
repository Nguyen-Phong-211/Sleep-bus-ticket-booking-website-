<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('type_vehicles')->insert([
            ['type_vehicle_id' => 1, 'type_vehicle_name' => 'Limousine', 'max_seat' => 24, 'created_at' => now(), 'updated_at' => now()],
            ['type_vehicle_id' => 2, 'type_vehicle_name' => 'Giường nằm', 'max_seat' => 40, 'created_at' => now(), 'updated_at' => now()],
            ['type_vehicle_id' => 3, 'type_vehicle_name' => 'Ghế', 'max_seat' => 45, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
