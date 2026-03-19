<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('static_pages')->insert([
            'page_title' => 'Project Banner',
            'shortcode' => '2009', // PROJECT_BANNER enum value
            'image' => 'frontend/images/News.webp', // Default image
            'content' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('static_pages')->where('shortcode', '2009')->delete();
    }
};
