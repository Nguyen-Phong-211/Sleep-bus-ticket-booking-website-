<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('permissions')->insert([
            ['permission_id' => 1, 'permission_update' => '1', 'permission_insert' => 1, 'permission_delete' => 1, 'on_column' => 'all column', 'on_table' => 'all table', 'status' => 1, 'role_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
