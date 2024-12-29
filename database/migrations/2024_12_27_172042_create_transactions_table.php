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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id')->primary();
            $table->unsignedBigInteger('type_transaction_id')->index();
            $table->timestamp('transaction_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->smallInteger('status');
            $table->double('amount');
            $table->string('transaction_reference');
            $table->char('currency', 20);
            $table->text('note')->nullable();
            $table->char('transaction_code', 10)->default(DB::raw('LPAD(FLOOR(RAND() * 10000000000), 10, "0")'))->unique();

            $table->foreign('type_transaction_id')->references('type_transaction_id')->on('type_transactions')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
