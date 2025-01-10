<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->integer('product_id');
            $table->integer('container_id');
            $table->string('voucher_no');
            $table->string('customer_marka');
            $table->string('store_marka');
            $table->string('str_room');
            $table->string('str_rack');
            $table->string('str_location');
            $table->integer('total_pieces');
            $table->integer('dispatched_pieces')->default('0');
            $table->integer('balance_pieces');
            $table->integer('total_amount');
            $table->integer('discount_amount')->default('0');
            $table->integer('received_amount')->default('0');
            $table->integer('balance_amount');
            $table->date('date');
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
