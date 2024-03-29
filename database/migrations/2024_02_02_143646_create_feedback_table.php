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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('f_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('rating')->nullable();
            $table->text('msg');
            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('set null');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
