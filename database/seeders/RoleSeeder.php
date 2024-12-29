<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('roles')->insert([
            ['role_id' => 1, 'role_name' => 'Admin', 'status' => 1],
            ['role_id' => 2, 'role_name' => 'User', 'status' => 1],
        ]);
    }
}
