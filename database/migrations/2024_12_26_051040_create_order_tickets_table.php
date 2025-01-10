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
        Schema::create('order_tickets', function (Blueprint $table) {
            $table->id('order_ticket_id')->primary();
            $table->unsignedBigInteger('route_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->double('price');
            $table->integer('number_of_ticket');
            $table->double('dif_cost');
            $table->double('total_price');
            $table->text('note')->nullable();
            $table->char('order_ticket_code', 10)->default(DB::raw('LPAD(FLOOR(RAND() * 10000000000), 10, "0")'))->unique();
            $table->unsignedBigInteger('vehicle_id')->index();
            $table->unsignedBigInteger('type_time_id')->index();
            $table->smallInteger('one_way');
            $table->smallInteger('round_trip');
            $table->smallInteger('transshipment');

            $table->foreign('route_id')->references('route_id')->on('routes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('type_time_id')->references('type_time_id')->on('type_times')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_tickets');
    }
};
