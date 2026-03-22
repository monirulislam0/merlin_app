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
        Schema::create('service_pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('short_code')->unique();
            $table->text('extra')->nullable();
            $table->string('image')->nullable();
            $table->longText('content')->nullable();
            $table->timestamps();
        });

        // Insert default record
        \DB::table('service_pages')->insert([
            'page_title' => 'Service Page',
            'short_code' => 'service_page_content',
            'content' => '<h2>Our Services</h2><p>We provide excellent services to our clients.</p>',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_pages');
    }
};
