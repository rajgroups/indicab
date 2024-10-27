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
        Schema::create('tbl_settings', function (Blueprint $table) {
            $table->id();
            $table->string('meta_author')->nullable();
            $table->string('meta_copyright')->nullable();
            $table->string('meta_reply_to')->nullable();
            $table->string('meta_expires')->nullable();
            $table->string('meta_theme_color')->nullable();
            $table->boolean('meta_handheld_friendly')->default(true);
            $table->boolean('meta_apple_web_app_capable')->default(true);
            $table->string('meta_apple_status_bar_style')->nullable();
            $table->string('meta_googlebot')->nullable();
            $table->string('meta_allow_search')->nullable();
            $table->string('meta_revisit_after')->nullable();
            $table->string('meta_distribution')->nullable();
            $table->string('meta_coverage')->nullable();
            $table->string('meta_robots')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_settings');
    }
};
