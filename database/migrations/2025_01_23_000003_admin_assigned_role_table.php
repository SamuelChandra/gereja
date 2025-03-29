<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('admin_assigned_role', function (Blueprint $table) {
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('role_id');
        
            $table->foreign('admin_id')->references('id')->on('admin')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('admin_role')->onDelete('cascade');
        
            $table->primary(['admin_id', 'role_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_assigned_role');
    }
};



