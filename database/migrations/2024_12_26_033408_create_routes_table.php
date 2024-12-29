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
        Schema::create('routes', function (Blueprint $table) {
            $table->id('route_id')->primary();
            $table->unsignedBigInteger('departurepoint_id')->index();
            $table->unsignedBigInteger('arrivalpoint_id')->index();
            $table->unsignedBigInteger('type_time_id')->index();
            $table->unsignedBigInteger('type_vehicle_id')->index();
            $table->unsignedBigInteger('row_seat_id')->index();
            $table->unsignedBigInteger('floor_id')->index();
            $table->time('total_time');
            $table->double('price');
            $table->smallInteger('status')->default(1);
            $table->smallInteger('round_trip');
            $table->smallInteger('one_way');
            $table->double('total_km');

            $table->foreign('departurepoint_id')->references('departurepoint_id')->on('departurepoints')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('arrivalpoint_id')->references('arrivalpoint_id')->on('arrivalpoints')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('type_time_id')->references('type_time_id')->on('type_times')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('type_vehicle_id')->references('type_vehicle_id')->on('type_vehicles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('row_seat_id')->references('row_seat_id')->on('row_seats')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('floor_id')->references('floor_id')->on('floors')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
