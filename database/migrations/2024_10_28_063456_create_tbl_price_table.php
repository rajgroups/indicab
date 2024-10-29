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
        Schema::create('tbl_price', function (Blueprint $table) {
            $table->id();
            
            // Forign key Column
            $table->unsignedBigInteger('service_id');

            $table->string('name')->comment('title');
            $table->decimal('price', 10, 2)->comment('price');
            $table->string('item_ratio',)->nullable();
            $table->string('price_ratio',)->nullable();
            $table->string('slug',)->unique();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->string('description')->nullable();
            $table->string('short_description')->nullable();
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
        Schema::dropIfExists('tbl_price');
    }
};
