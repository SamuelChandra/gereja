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
        Schema::create('status_rohani', function (Blueprint $table) {
            $table->id(); // Add an ID column (primary key)
            $table->boolean('status_baptis')->default(false);
            $table->date('tanggal_baptis')->nullable();
            $table->string('gereja_baptis')->nullable();
            $table->boolean('status_sidi')->default(false);
            $table->date('tanggal_sidi')->nullable();
            $table->string('gereja_sidi')->nullable();
            $table->boolean('status_nikah')->default(false);
            $table->date('tanggal_nikah')->nullable();
            $table->string('gereja_nikah')->nullable();

            $table->unsignedBigInteger('jemaat_id')->nullable(); // Add jemaat_id column
            $table->foreign('jemaat_id')->references('id')->on('jemaat')->onDelete('set null');
            // Add other columns as needed (e.g., user_id, foreign keys, etc.)
            $table->timestamps(); // Add created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_rohani');
    }
};