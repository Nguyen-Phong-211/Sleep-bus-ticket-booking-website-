<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id('bill_id')->primary();
            $table->unsignedBigInteger('branch_id')->index();
            $table->unsignedBigInteger('order_ticket_detail_id')->index();
            $table->string('employee_name');
            $table->timestamp('bill_date');
            $table->char('bill_code', 10)->default(DB::raw('LPAD(FLOOR(RAND() * 10000000000), 10, "0")'))->unique();;
            $table->string('image_qrcode');
            $table->integer('number_of_ticket');
            $table->double('price');
            $table->double('dif_cost');
            $table->double('total_cost');

            $table->foreign('branch_id')->references('branch_id')->on('branches')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_ticket_detail_id')->references('order_ticket_detail_id')->on('order_ticket_details')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
