<?php

use App\Models\Niche;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('section_title');
            $table->text('description');
            $table->string('phrase');
            $table->string('price');
            $table->json('modules')->nullable();
            $table->json('resources')->nullable();
            $table->string('button_text');
            $table->string('button_link');
            $table->foreignIdFor(Niche::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
