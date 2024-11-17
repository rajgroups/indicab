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
        Schema::create('tbl_blog', function (Blueprint $table) {
            $table->id();

            // Forign key Column
            $table->unsignedBigInteger('service_id');

            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->longText('short_desc')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('tbl_blog');
    }
};
