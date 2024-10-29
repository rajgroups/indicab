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
        Schema::create('tbl_faq', function (Blueprint $table) {
            $table->id();
            // Forign key Column
            $table->unsignedBigInteger('service_id');

            $table->string('image')->nullable();
            $table->string('qustion');
            $table->string('answer');
            $table->enum('status',['active','inactive'])->default('active');            
            // Forign Key
            $table->foreign('service_id')->references('id')->on('tbl_service');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_faq');
    }
};
