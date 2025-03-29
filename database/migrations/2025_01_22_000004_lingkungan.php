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
        Schema::create('lingkungan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lingkungan');

            $table->unsignedBigInteger('jemaat_id')->nullable(); // Add jemaat_id column
            $table->foreign('jemaat_id')->references('id')->on('jemaat')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lingkungan');
    }
};