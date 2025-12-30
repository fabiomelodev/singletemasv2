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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('excerpt');
            $table->text('description');
            $table->text('observation');
            $table->string('price');
            $table->string('link');
            $table->json('items');
            $table->json('resources');
            $table->integer('order');
            $table->foreignIdFor(Niche::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
