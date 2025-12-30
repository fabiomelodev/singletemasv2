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
                        'name' => 'Site Institucional do seu negócio'
                    ],

                    [
                        'name' => 'Integração com redes sociais e mapa'
                    ],

                    [
                        'name' => 'Botão Whatsapp (CTA)'
                    ],

                    [
                        'name' => 'Design Responsivo (Mobile)'
                    ],

                    [
                        'name' => 'Suporte'
                    ],

                    [
                        'name' => 'Manutenção corretiva e preventiva'
                    ],

                    [
                        'name' => 'Hospedagem e domínio'
                    ],

                    [
                        'name' => 'E-mail profissional (contato@nomedosite.com.br)'
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
                        'name' => 'Site Institucional da Igreja'
                    ],

                    [
                        'name' => 'Agenda de Cultos e Eventos'
                    ],

                    [
                        'name' => 'Página de Pedidos de Oração'
                    ],

                    [
                        'name' => 'Integração com YouTube (Cultos)'
                    ],

                    [
                        'name' => 'Mapa e Horários'
                    ],

                    [
                        'name' => 'Design Responsivo (Mobile)'
                    ],

                    [
                        'name' => 'Suporte'
                    ],

                    [
                        'name' => 'Manutenção corretiva e preventiva'
                    ],

                    [
                        'name' => 'Hospedagem e domínio'
                    ],

                    [
                        'name' => 'E-mail profissional (contato@nomedosite.com.br)'
                    ]
                ]),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
