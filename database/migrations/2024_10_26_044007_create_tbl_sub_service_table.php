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
        Schema::create('tbl_sub_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->string('name', 100);
            $table->string('slug', 100)->unique();  // Remove parameter from unique
            $table->string('image', 100);
            $table->string('icon', 100)->nullable();
            $table->timestamps();
            // Define the foreign key constraint
            $table->foreign('service_id')->references('id')->on('tbl_service')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_sub_service');
    }
};
