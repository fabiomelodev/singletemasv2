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
                        'name' => 'Módulos do sistema de gestão'
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
