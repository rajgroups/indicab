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
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->id('id');
            $table->string('name'); // Make sure this matches the default data column name
            $table->string('role')->default('admin');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->string('adress')->nullable();
            $table->string('fax')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('password');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_admin');
    }
};
