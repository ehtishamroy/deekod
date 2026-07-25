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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title')->default("Deekod — Your chairs should be full.");
            $table->text('seo_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('favicon')->nullable();
            $table->string('calendly_link')->default('https://calendly.com/YOUR-LINK');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
