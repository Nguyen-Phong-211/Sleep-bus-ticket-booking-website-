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
        Schema::create('contract_rent_vehicles', function (Blueprint $table) {
            $table->id('contract_rent_vehicle_id')->primary();
            $table->char('contract_rent_vehicle_code', 10)->default(DB::raw('LPAD(FLOOR(RAND() * 10000000000), 10, "0")'))->unique();
            $table->unsignedBigInteger('branch_id')->index();
            $table->unsignedBigInteger('vehicle_id')->index();
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->time('total_time')->nullable();
            $table->double('temp_total_price');
            $table->unsignedBigInteger('user_id')->index();

            $table->foreign('branch_id')->references('branch_id')->on('branches')->onDelete('cascade');
            $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicles')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract_rent_vehicles');
    }
};
