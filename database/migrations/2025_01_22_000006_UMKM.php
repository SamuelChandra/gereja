<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();
            $table->string('umkm_name');
            $table->text('deskripsi_umkm');
            $table->string('kategori_umkm');
            $table->unsignedBigInteger('jemaat_id')->nullable(); // NULLABLE karena tidak wajib
            $table->timestamps();
        
            $table->foreign('jemaat_id')->references('id')->on('jemaat')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('umkm');
    }
};
