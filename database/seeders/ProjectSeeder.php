<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'name' => 'AD. Calvário',
                'slug' => 'ad-calvario',
                'link' => 'adcalvario.com.br',
                'thumbnail' => null,                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Fabio Melo Dev',
                'slug' => 'fabio-melo-dev',
                'link' => 'fabiomelodev.com.br',
                'thumbnail' => null,                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Copiosa Redenção',
                'slug' => 'copiosa-redencao',
                'link' => 'copiosaredencao.org.br',
                'thumbnail' => null,                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Mercedários',
                'slug' => 'mercedarios',
                'link' => 'mercedarios.org.br',
                'thumbnail' => null,                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'WNR Engenharia',
                'slug' => 'wnr-engenharia',
                'link' => 'wnrengenharia.singletemas.com.br',                'thumbnail' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Dom Bosco',
                'slug' => 'dom-bosco',
                'link' => 'dombosco.net',                'thumbnail' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
