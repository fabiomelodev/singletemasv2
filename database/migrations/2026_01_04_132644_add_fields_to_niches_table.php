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
        Schema::table('niches', function (Blueprint $table) {
            $table->string('banner_tag');
            $table->string('banner_title_first');
            $table->string('banner_title_second');
            $table->text('banner_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('niches', function (Blueprint $table) {
            //
        });
    }
};
