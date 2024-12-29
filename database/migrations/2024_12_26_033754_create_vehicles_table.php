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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id('vehicle_id')->primary();
            $table->string('vehicle_name');
            $table->char('license_plate', 10)->unique();
            $table->unsignedBigInteger('type_vehicle_id')->index();
            $table->smallInteger('purpose_of_use');
            $table->string('color', 50);
            $table->double('fuel_per_100');
            $table->string('fuel_name', 50);
            $table->double('number_of_km');
            $table->integer('number_of_rent');
            $table->integer('max_seat');
            $table->string('image');
            $table->unsignedBigInteger('route_id')->index();

            $table->foreign('type_vehicle_id')->references('type_vehicle_id')->on('type_vehicles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('route_id')->references('route_id')->on('routes')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
