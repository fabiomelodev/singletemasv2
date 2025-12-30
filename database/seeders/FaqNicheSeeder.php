<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqNicheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faq_niches')->insert([
            [
                'faq_id' => 1,
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'faq_id' => 2,
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'faq_id' => 3,
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'faq_id' => 4,
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
