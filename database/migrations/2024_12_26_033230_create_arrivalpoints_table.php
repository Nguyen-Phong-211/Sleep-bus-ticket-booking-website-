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
        Schema::create('arrivalpoints', function (Blueprint $table) {
            $table->id('arrivalpoint_id')->primary();
            $table->string('arrivalpoint_name');
            $table->string('description')->nullable();
            $table->smallInteger('status');
            $table->string('detail_address');
            $table->smallInteger('one_way');
            $table->smallInteger('transshipment');
            
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arrivalpoints');
    }
};
