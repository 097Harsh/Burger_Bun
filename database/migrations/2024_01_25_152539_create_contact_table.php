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
        Schema::create('Contact', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email');
            $table->string('contact_no')->nullable();
            $table->string('subject');
            $table->text('msg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Contact');
    }
};
