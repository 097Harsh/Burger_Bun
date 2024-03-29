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
        Schema::create('product', function (Blueprint $table) {
            $table->id('p_id');
            $table->string('p_name');
            $table->string('p_image')->nullable();
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('is_delete')->default(0);
            $table->text('description')->nullable();
            $table->double('price', 15, 2); 
            $table->foreign('cat_id')->references('cat_id')->on('category')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
