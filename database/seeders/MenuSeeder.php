<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            [
                'name' => 'Menu Página Home',
                'slug' => 'menu-pagina-home',
                'items' => json_encode([
                    [
                        'name' => 'Serviços',
                        'link' => '#servicos'
                    ],

                    [
                        'name' => 'Cases',
                        'link' => '#cases'
                    ],

                    [
                        'name' => 'Site',
                        'link' => '#site'
                    ],

                    [
                        'name' => 'Processos',
                        'link' => '#processos'
                    ],

                    [
                        'name' => 'Template',
                        'link' => '#template'
                    ],

                    [
                        'name' => 'Planos',
                        'link' => '#planos'
                    ],

                    [
                        'name' => 'Testemunhos',
                        'link' => '#testemunhos'
                    ],

                    [
                        'name' => 'FAQ',
                        'link' => '#faq'
                    ]
                ]),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Menu Single Nicho',
                'slug' => 'menu-single-nicho',
                'items' => json_encode([
                    [
                        'name' => 'Planos',
                        'link' => '#planos'
                    ],

                    [
                        'name' => 'Recursos',
                        'link' => '#recursos'
                    ],

                    [
                        'name' => 'Detalhes',
                        'link' => '#detalhes'
                    ],

                    [
                        'name' => 'Testemunhos',
                        'link' => '#testemunhos'
                    ],

                    [
                        'name' => 'FAQ',
                        'link' => '#faq'
                    ]
                ]),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
