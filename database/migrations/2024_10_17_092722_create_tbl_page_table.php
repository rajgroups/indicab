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
        Schema::create('tbl_page', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('seo_title'); // Page SEO Title
            $table->text('seo_description'); // Page Meta Description
            $table->text('seo_keywords'); // Page Meta Keywords
            $table->string('area'); // Area Name
            $table->string('city'); // City Name
            $table->string('og_title')->nullable(); // OG SEO Title
            $table->string('og_image')->nullable(); // OG Meta Image
            $table->text('og_description')->nullable(); // OG Meta Description
            $table->string('first_title'); // H1 Title
            $table->text('first_description'); // First Description
            $table->text('short_tag'); // Short Tag
            $table->string('banner_image'); // Banner Image
            
            // $table->string('show_sub_category_service'); // Show Sub Category Service
            $table->enum('show_sub_category_service',['yes','no']);
            // $table->string('show_service_location'); // Show Service Location
            $table->enum('show_service_location',['yes','no']);
            // $table->string('show_price_information'); // Show Price Information
            $table->enum('show_price_information',['yes','no']);
            // $table->string('show_testimonial'); // Show Testimonial
            $table->enum('show_testimonial',['yes','no']);
            // $table->string('show_faq'); // Show FAQ
            $table->enum('show_faq',['yes','no']);

            $table->string('first_content_title'); // Content Title
            $table->text('first_content_description'); // First Content Description
            $table->text('content_short_tag'); // Content Short Tag
            $table->string('side_image'); // Side Image
            $table->string('slug'); // Slug Name
            $table->string('slug_name'); // Slug Name

            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('service_id');
            
            $table->foreign('location_id')->references('id')->on('tbl_location');
            $table->foreign('service_id')->references('id')->on('tbl_service');

            $table->string('image'); // Feature Image
            $table->enum('status', ['active', 'inactive']); // Status
            // $table->bigInteger('votes')->nullable()->default(12);
            $table->longText('description'); // Brief Description
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_page');
    }
};
