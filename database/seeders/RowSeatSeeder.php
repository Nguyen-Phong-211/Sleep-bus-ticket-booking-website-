<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RowSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('row_seats')->insert([
            ['row_seat_id' => '1', 'row_seat_name' => 'Hàng trên', 'created_at' => now(), 'updated_at' => now()],
            ['row_seat_id' => '2', 'row_seat_name' => 'Hàng giữa', 'created_at' => now(), 'updated_at' => now()],
            ['row_seat_id' => '3', 'row_seat_name' => 'Hàng cuối', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
