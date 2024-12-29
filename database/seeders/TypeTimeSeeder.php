<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('type_times')->insert([
            ['type_time_id' => 1, 'type_time_name' => 'Sáng sớm 5:00 - 8:00 giờ', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['type_time_id' => 2, 'type_time_name' => 'Trưa 11:00 - 13:00 giờ', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['type_time_id' => 3, 'type_time_name' => 'Chiều 14:00 - 17:00 giờ', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['type_time_id' => 4, 'type_time_name' => 'Tối 19:00 - 23:00 giờ ', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
