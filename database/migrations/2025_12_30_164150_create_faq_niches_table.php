<?php

use App\Models\Faq;
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
        Schema::create('faq_niches', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Faq::class);
            $table->foreignIdFor(Niche::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq_niches');
    }
};
