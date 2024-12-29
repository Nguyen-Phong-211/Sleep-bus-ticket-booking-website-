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
        Schema::create('route_schedules', function (Blueprint $table) {
            $table->id('route_schedule_id')->primary();
            $table->unsignedBigInteger('route_id')->index();
            $table->date('departure_date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->smallInteger('status');

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
        Schema::dropIfExists('route_schedules');
    }
};
