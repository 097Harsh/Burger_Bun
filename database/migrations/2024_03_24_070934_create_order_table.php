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
        Schema::create('order', function (Blueprint $table) {
            $table->id('order_id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('total_price', 10, 2);
            $table->string('payment_method');
            $table->string('payment_status')->nullable();
            $table->string('order_status');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        //order-item table
        Schema::create('order_items', function (Blueprint $table) {
            $table->id('item_id');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('order_id')->on('order')->onDelete('cascade');
            $table->unsignedBigInteger('p_id');
            $table->foreign('p_id')->references('p_id')->on('product')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('order');
    }
};
