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
        Schema::create('route_details', function (Blueprint $table) {
            $table->id('route_detail_id')->primary();
            $table->unsignedBigInteger('route_id')->index();
            $table->string('point_route1', 50);
            $table->time('time_route1');
            $table->string('detail_address_point1');
            $table->string('point_route2', 50);
            $table->time('time_route2');
            $table->string('detail_address_point2');
            $table->string('point_route3', 50);
            $table->time('time_route3');
            $table->string('detail_address_point3');
            $table->string('point_route4', 50);
            $table->time('time_route4');
            $table->string('detail_address_point4');

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
        Schema::dropIfExists('route_details');
    }
};
