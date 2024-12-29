<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Seat of Limousine
        DB::table('seats')->insert([
            ['seat_id' => 1, 'seat_name' => 'B2', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 2, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 2, 'seat_name' => 'B4', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 2, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 3, 'seat_name' => 'B6', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 2, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 4, 'seat_name' => 'B8', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 2, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 5, 'seat_name' => 'B10', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 2, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 6, 'seat_name' => 'B12', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 2, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            
            ['seat_id' => 7, 'seat_name' => 'B1', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 3, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 8, 'seat_name' => 'B3', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 3, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 9, 'seat_name' => 'B5', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 3, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 10, 'seat_name' => 'B7', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 3, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 11, 'seat_name' => 'B9', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 3, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 12, 'seat_name' => 'B11', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 3, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('seats')->insert([
            ['seat_id' => 13, 'seat_name' => 'A2', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 2, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 14, 'seat_name' => 'A4', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 2, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 15, 'seat_name' => 'A6', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 2, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 16, 'seat_name' => 'A8', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 2, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 17, 'seat_name' => 'A10', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 2, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 18, 'seat_name' => 'A12', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 2, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            
            ['seat_id' => 19, 'seat_name' => 'A1', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 3, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 20, 'seat_name' => 'A3', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 3, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 21, 'seat_name' => 'A5', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 3, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 22, 'seat_name' => 'A7', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 3, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 23, 'seat_name' => 'A9', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 3, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 24, 'seat_name' => 'A11', 'status' => 1, 'type_vehicle_id' => 1, 'floor_id' => 3, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
        //Seat of sleeper
        DB::table('seats')->insert([
            // Floor 1
            ['seat_id' => 25, 'seat_name' => 'A1', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 26, 'seat_name' => 'A4', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 27, 'seat_name' => 'A7', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 28, 'seat_name' => 'A10', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 29, 'seat_name' => 'A13', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 30, 'seat_name' => 'A16', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 31, 'seat_name' => 'A19', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            ['seat_id' => 32, 'seat_name' => 'A2', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 33, 'seat_name' => 'A5', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 34, 'seat_name' => 'A8', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 35, 'seat_name' => 'A11', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 36, 'seat_name' => 'A14', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 37, 'seat_name' => 'A17', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 38, 'seat_name' => 'A20', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            ['seat_id' => 39, 'seat_name' => 'A3', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 40, 'seat_name' => 'A6', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 41, 'seat_name' => 'A9', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 42, 'seat_name' => 'A12', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 43, 'seat_name' => 'A15', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 44, 'seat_name' => 'A18', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 45, 'seat_name' => 'A21', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            ['seat_id' => 46, 'seat_name' => 'A22', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 2, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 47, 'seat_name' => 'A23', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 2, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Floor 2
            ['seat_id' => 48, 'seat_name' => 'B1', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 49, 'seat_name' => 'B4', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 50, 'seat_name' => 'B7', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 51, 'seat_name' => 'B10', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 52, 'seat_name' => 'B13', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 53, 'seat_name' => 'B16', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            ['seat_id' => 54, 'seat_name' => 'B2', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 55, 'seat_name' => 'B5', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 56, 'seat_name' => 'B8', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 57, 'seat_name' => 'B11', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 58, 'seat_name' => 'B14', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 59, 'seat_name' => 'B17', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            ['seat_id' => 60, 'seat_name' => 'B3', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 61, 'seat_name' => 'B6', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 62, 'seat_name' => 'B9', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 63, 'seat_name' => 'B12', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 64, 'seat_name' => 'B15', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 65, 'seat_name' => 'B18', 'status' => 1, 'type_vehicle_id' => 2, 'floor_id' => 3, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
        // Seat of normal car
        DB::table('seats')->insert([
            ['seat_id' => 66, 'seat_name' => 'A1', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 67, 'seat_name' => 'A2', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 68, 'seat_name' => 'A3', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 69, 'seat_name' => 'A4', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 70, 'seat_name' => 'A5', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 71, 'seat_name' => 'A6', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 72, 'seat_name' => 'A7', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 73, 'seat_name' => 'A8', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 74, 'seat_name' => 'A9', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 75, 'seat_name' => 'A10', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 76, 'seat_name' => 'A11', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 77, 'seat_name' => 'A12', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 78, 'seat_name' => 'A13', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 79, 'seat_name' => 'A14', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 80, 'seat_name' => 'A15', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 81, 'seat_name' => 'A16', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 82, 'seat_name' => 'A17', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 83, 'seat_name' => 'A18', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 84, 'seat_name' => 'A19', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 85, 'seat_name' => 'A20', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            ['seat_id' => 86, 'seat_name' => 'A21', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 87, 'seat_name' => 'A22', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 88, 'seat_name' => 'A23', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 89, 'seat_name' => 'A24', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 90, 'seat_name' => 'A25', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            ['seat_id' => 91, 'seat_name' => 'B1', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 92, 'seat_name' => 'B2', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 93, 'seat_name' => 'B3', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 94, 'seat_name' => 'B4', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 95, 'seat_name' => 'B5', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 96, 'seat_name' => 'B6', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 97, 'seat_name' => 'B7', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 98, 'seat_name' => 'B8', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 99, 'seat_name' => 'B9', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 100, 'seat_name' => 'B10', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 101, 'seat_name' => 'B11', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 102, 'seat_name' => 'B12', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 103, 'seat_name' => 'B13', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 104, 'seat_name' => 'B14', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 105, 'seat_name' => 'B15', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 106, 'seat_name' => 'B16', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 107, 'seat_name' => 'B17', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 108, 'seat_name' => 'B18', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 109, 'seat_name' => 'B19', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['seat_id' => 110, 'seat_name' => 'B20', 'status' => 1, 'type_vehicle_id' => 3, 'floor_id' => 1, 'row_seat_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
