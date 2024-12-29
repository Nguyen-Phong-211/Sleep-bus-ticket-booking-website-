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
        Schema::create('order_ticket_details', function (Blueprint $table) {
            $table->id('order_ticket_detail_id');
            $table->unsignedBigInteger('route_schedule_id')->index();
            $table->unsignedBigInteger('seat_id')->index();
            $table->unsignedBigInteger('order_ticket_id')->index();
            $table->timestamp('order_trip_date')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('route_schedule_id')->references('route_schedule_id')->on('route_schedules')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('seat_id')->references('seat_id')->on('seats')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_ticket_id')->references('order_ticket_id')->on('order_tickets')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_ticket_details');
    }
};
