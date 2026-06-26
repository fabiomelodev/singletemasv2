<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Remove definitivamente as estruturas de Nichos, Planos e Recursos,
     * além das colunas niche_id que os relacionavam.
     */
    public function up(): void
    {
        foreach (['projects', 'products', 'testimonials'] as $table) {
            if (Schema::hasColumn($table, 'niche_id')) {
                Schema::table($table, function (Blueprint $table) {
                    $table->dropColumn('niche_id');
                });
            }
        }

        Schema::dropIfExists('faq_niches');
        Schema::dropIfExists('plans');
        Schema::dropIfExists('resources');
        Schema::dropIfExists('niches');
    }

    /**
     * Sem reversão: as estruturas de Nichos/Planos/Recursos foram descontinuadas.
     */
    public function down(): void
    {
        //
    }
};
