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
        Schema::create('tbl_testimonial', function (Blueprint $table) {
            $table->id();
            // Forign key Column
            $table->unsignedBigInteger('service_id');

            $table->string('name')->comment('name');
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->string('description')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
            
            // Forign Key
            $table->foreign('service_id')->references('id')->on('tbl_service');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_testimonial');
    }
};
