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
        Schema::create('book_table', function (Blueprint $table) {
            $table->id('b_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->date('b_date');
            $table->string('starting_time');
            $table->string('ending_time');
            $table->string('booking_name');
            $table->string('status');
            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
