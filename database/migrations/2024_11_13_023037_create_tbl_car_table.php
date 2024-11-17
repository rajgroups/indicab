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
        Schema::create('tbl_car', function (Blueprint $table) {
            $table->id();
            
            // Forign key Column
            $table->unsignedBigInteger('service_id');

            $table->string('name')->comment('title');
            $table->string('vehicle_type')->comment('vehicle_type');
            $table->decimal('price', 10, 2)->comment('price');
            $table->string('item_ratio',)->nullable();
            $table->string('price_ratio',)->nullable();
            $table->string('slug',)->unique();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->longText('description')->nullable();
            $table->longText('short_description')->nullable();

            // Car Spacification
            $table->string('make'); // Car make (e.g., Toyota)
            $table->string('vehicle_type'); // Car make (e.g., Toyota)
            $table->string('model'); // Car model (e.g., Corolla)
            $table->year('year'); // Manufacturing year
            $table->string('vin')->unique(); // Vehicle Identification Number (VIN)
            $table->string('color')->nullable(); // Car color
            $table->string('engine_type')->nullable(); // Engine type (e.g., V6, electric)
            $table->enum('aircooling',['ac','nonac']);
            $table->string('passanger')->nullable(); // Engine type (e.g., V6, electric)
            $table->enum('transmission',['automatic','manual','semi-automatic'])->nullable(); // Transmission type (e.g., automatic, manual)
            $table->enum('fuel_type',['petrol','diesel','electric','hybrid','other'])->nullable();
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
        Schema::dropIfExists('tbl_car');
    }
};
