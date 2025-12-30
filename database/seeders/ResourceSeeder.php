<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('resources')->insert([
            [
                'name' => 'Site da Igreja Responsivo',
                'plans' => json_encode([
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]),
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Agenda de Eventos/Cultos',
                'plans' => json_encode([
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]),
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Número de Páginas',
                'plans' => json_encode([
                    [
                        'name' => 'Essencial',
                        'type' => 'text',
                        'value' => '5'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'text',
                        'value' => '15'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'text',
                        'value' => 'ilimitado'
                    ],
                ]),
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Pedidos de Oração Online',
                'plans' => json_encode([
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]),
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Integração Redes Sociais',
                'plans' => json_encode([
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]),
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Blog/Devocionais',
                'plans' => json_encode([
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]),
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Gestão de Membros Básica',
                'plans' => json_encode([
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]),
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Galeria de Fotos/Vídeos',
                'plans' => json_encode([
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]),
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Estudos Bíblicos',
                'plans' => json_encode([
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]),
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Gestão de Células/Grupos',
                'plans' => json_encode([
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]),
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Escala de Voluntários',
                'plans' => json_encode([
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]),
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Suporte',
                'plans' => json_encode([
                    [
                        'name' => 'Essencial',
                        'type' => 'text',
                        'value' => 'E-mail'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'text',
                        'value' => 'Prioritário'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'text',
                        'value' => '24/7'
                    ],
                ]),
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
