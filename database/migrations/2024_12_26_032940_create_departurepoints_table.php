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
        Schema::create('departurepoints', function (Blueprint $table) {
            $table->id('departurepoint_id')->primary();
            $table->unsignedBigInteger('branch_id')->index();
            $table->string('departurepoint_name');
            $table->string('description')->nullable();
            $table->smallInteger('status');
            $table->string('detail_address');
            $table->smallInteger('one_way');
            $table->smallInteger('transshipment');
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('branch_id')->references('branch_id')->on('branches')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departurepoints');
    }
};
