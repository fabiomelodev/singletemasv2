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
            $table->string('section_plans_title')->nullable();
            $table->text('section_plans_description')->nullable();
            $table->text('section_resources_description')->nullable();
            $table->text('section_plans_details_description')->nullable();
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
