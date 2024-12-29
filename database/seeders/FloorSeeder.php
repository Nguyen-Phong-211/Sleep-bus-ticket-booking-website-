<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('floors')->insert([
            'floor_id' => 1,
            'floor_name' => 'Tầng 0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('floors')->insert([
            'floor_id' => 2,
            'floor_name' => 'Tầng 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('floors')->insert([
            'floor_id' => 3,
            'floor_name' => 'Tầng 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
