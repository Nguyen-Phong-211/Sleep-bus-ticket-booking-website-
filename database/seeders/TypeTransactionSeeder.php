<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('type_transactions')->insert([
            ['type_transaction_id' => 1, 'type_transactions_name' => 'Đặt vé'],
            ['type_transaction_id' => 2, 'type_transactions_name' => 'Trả vé'],
            ['type_transaction_id' => 3, 'type_transactions_name' => 'Tạm giữ vé'],
            ['type_transaction_id' => 4, 'type_transactions_name' => 'Thanh toán'],
            ['type_transaction_id' => 5, 'type_transactions_name' => 'Admin - Thao tác thêm'],
            ['type_transaction_id' => 6, 'type_transactions_name' => 'Admin - Thay tác cập nhật thông tin'],
            ['type_transaction_id' => 7, 'type_transactions_name' => 'Admin - Thao tác xoá thông tin'],
            ['type_transaction_id' => 8, 'type_transactions_name' => 'Hủy đơn hàng'],
        ]);
    }
}
