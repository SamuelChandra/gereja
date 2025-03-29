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
        Schema::create('jemaat', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender')->nullable();
            $table->string('status_in_family')->nullable();
            $table->string('location_of_birth')->nullable();
            $table->date('date_of_birth')->nullable(); 
            $table->string('blood_group')->nullable();
            $table->string('education')->nullable();
            $table->string('work')->nullable();
            $table->string('ethnicity')->nullable();
            $table->text('address')->nullable(); 
            $table->string('phone_number', 15)->nullable();
            $table->string('email')->nullable();
            $table->string('status_jemaat')->nullable();
            $table->timestamps();
            
            $table->unsignedBigInteger('status_rohani_id')->nullable();
            // $table->unsignedBigInteger('status_extra_id')->nullable();
            // $table->unsignedBigInteger('jabatan_id')->nullable();
            // $table->unsignedBigInteger('lingkungan_id')->nullable();
            
            $table->foreignId('status_rohani_id')->references('id')->on('status_rohani')->onDelete('set null');
            // $table->foreign('status_rohani_id')->references('id')->on('status_rohani')->onDelete('set null');
            // $table->foreign('status_extra_id')->references('id')->on('status_extra')->onDelete('set null');
            // $table->foreign('jabatan_id')->references('id')->on('jabatan')->onDelete('set null');
            // $table->foreign('lingkungan_id')->references('id')->on('lingkungan')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('jemaat');
        Schema::table('jemaat', function (Blueprint $table) {
            $table->dropForeign(['status_extra_id']);
            $table->dropForeign(['status_rohani_id']);
            $table->dropForeign(['jabatan_id']);
            $table->dropForeign(['lingkungan_id']);
        });
    }
};
