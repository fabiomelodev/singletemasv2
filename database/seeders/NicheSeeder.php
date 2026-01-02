<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NicheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('niches')->insert([
            [
                'name' => 'Empresa',
                'slug' => 'empresa',
                'plan_title' => 'Planos para empresa',
                'plan_description' => 'Para igrejas que estão iniciando sua presença online',
                'minimum_price' => 'R$ 99,90',
                'plan_details' => json_encode([
                    [
                        'name' => 'Zero preocupação técnica'
                    ],

                    [
                        'name' => 'Site sempre seguro e atualizado'
                    ],

                    [
                        'name' => 'Suporte e ajustes contínuos'
                    ],

                    [
                        'name' => 'Economia de tempo e custo'
                    ],

                    [
                        'name' => 'Evolução constante do site'
                    ]
                ]),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Igreja',
                'slug' => 'igreja',
                'plan_title' => 'Planos para igreja',
                'plan_description' => 'Para igrejas que estão iniciando sua presença online',
                'minimum_price' => 'R$ 99,90',
                'plan_details' => json_encode([
                    [
                        'name' => 'Foco no ministério enquanto cuidamos do site'
                    ],

                    [
                        'name' => 'Comunicação clara com membros e visitantes'
                    ],

                    [
                        'name' => 'Estabilidade para transmissões, eventos e conteúdos'
                    ]
                ]),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
