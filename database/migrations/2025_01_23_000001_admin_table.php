<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED
            $table->string('username')->unique();
            $table->string('password');
            $table->timestamps();
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};

