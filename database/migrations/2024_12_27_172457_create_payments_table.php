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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id')->primary();
            $table->timestamp('payment_date');
            $table->char('payment_code', 10);
            $table->unsignedBigInteger('bill_id')->index();
            $table->smallInteger('status')->default(1);
            $table->unsignedBigInteger('transaction_id')->index();
            $table->string('payment_receipt');
            $table->text('note')->nullable();

            $table->foreign('bill_id')->references('bill_id')->on('bills')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('transaction_id')->references('transaction_id')->on('transactions')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
