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
        Schema::create('seats', function (Blueprint $table) {
            $table->id('seat_id')->primary();
            $table->string('seat_name');
            $table->smallInteger('status')->default(1);

            $table->unsignedBigInteger('type_vehicle_id')->index();
            $table->foreign('type_vehicle_id')->references('type_vehicle_id')->on('type_vehicles')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('floor_id')->index();
            $table->foreign('floor_id')->references('floor_id')->on('floors')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('row_seat_id')->index();
            $table->foreign('row_seat_id')->references('row_seat_id')->on('row_seats')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
