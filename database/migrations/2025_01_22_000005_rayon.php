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
        Schema::create('rayon', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rayon');
            $table->unsignedBigInteger('lingkungan_id');
            $table->foreign('lingkungan_id')->references('id')->on('lingkungan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rayon');
    }
};