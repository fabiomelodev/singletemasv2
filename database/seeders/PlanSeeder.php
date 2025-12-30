<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            [
                'name' => 'Plano Essencial',
                'excerpt' => 'Para igrejas que estão iniciando sua presença online',
                'description' => 'O Plano Essencial é o primeiro passo para sua igreja entrar no mundo digital. Garanta que fiéis e visitantes encontrem informações sobre cultos, localização e eventos facilmente.',
                'observation' => 'Pequenas congregações, novas igrejas ou ministérios que precisam de um site informativo básico e profissional.',
                'price' => 'R$ 99,90',
                'link' => '#',
                'items' => json_encode([
                    [
                        'name' => 'Página de Pedidos de Oração',
                        'description' => '',
                    ],

                    [
                        'name' => 'Serviço de Hospedagem',
                        'description' => '',
                    ],

                    [
                        'name' => 'Domínio Único',
                        'description' => '(nomedosite.com.br)',
                    ],

                    [
                        'name' => 'Suporte por E-mail',
                        'description' => '',
                    ],

                    [
                        'name' => '1x E-mail Profissional',
                        'description' => '(contato@nomedosite.com.br)',
                    ]

                    // [
                    //     'name' => 'Site Modelo Padrão da Igreja',
                    //     'description' => '',
                    // ],

                    // [
                    //     'name' => 'Agenda de Cultos e Eventos',
                    //     'description' => '',
                    // ],

                    // [
                    //     'name' => 'Integração com YouTube (Cultos)',
                    //     'description' => '',
                    // ],

                    // [
                    //     'name' => 'Mapa e Horários',
                    //     'description' => '',
                    // ],

                    // [
                    //     'name' => 'Design Responsivo (Mobile)',
                    //     'description' => '',
                    // ],


                ]),
                'resources' => json_encode([
                    [
                        'name' => 'Página de Pedidos de Oração',
                    ],

                    [
                        'name' => 'Hospedagem',
                    ],

                    // [
                    //     'name' => 'Canal direto para pedidos de oração',
                    // ],

                    // [
                    //     'name' => 'Mapa de localização integrado',
                    // ]
                ]),
                'order' => 1,
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Plano Completo',
                'excerpt' => 'Ideal para comunidades em crescimento',
                'description' => 'O Plano Completo fortalece a comunicação com seus membros. Publique devocionais e mantenha a comunidade engajada durante a semana.',
                'observation' => 'Igrejas estabelecidas que desejam interagir mais com os membros e facilitar doações online.',
                'price' => 'R$ 199,90',
                'link' => '#',
                'items' => json_encode([
                    [
                        'name' => 'Tudo do Plano Essencial',
                        'description' => '',
                    ],

                    [
                        'name' => 'Gestão de Membros Básica',
                        'description' => '',
                    ],

                    [
                        'name' => 'Inscrição em Eventos/Retiros',
                        'description' => '',
                    ],

                    [
                        'name' => 'Suporte Prioritário',
                        'description' => '',
                    ],

                    [
                        'name' => '3x E-mail Profissional',
                        'description' => '(contato@nomedosite.com.br)',
                    ]

                    // [
                    //     'name' => 'Galeria de Fotos e Vídeos',
                    //     'description' => '',
                    // ],

                    // [
                    //     'name' => 'Blog de Devocionais e Notícias',
                    //     'description' => '',
                    // ],

                    // [
                    //     'name' => 'Estudos Bíblicos Online',
                    //     'description' => '',
                    // ],


                ]),
                'resources' => json_encode([
                    [
                        'name' => 'Blog para Pastorais e Devocionais Diários',

                    ],

                    [
                        'name' => 'Galeria de fotos de batismos e festas',
                    ],

                    [
                        'name' => 'Inscrições online para retiros e conferências',
                    ],

                    [
                        'name' => 'Área de downloads para estudos bíblicos',
                    ]
                ]),
                'order' => 2,
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Plano Premium',
                'excerpt' => 'Gestão completa para grandes ministérios',
                'description' => 'A solução definitiva para grandes ministérios. Tenha controle total sobre gestão de membros, células e voluntários',
                'observation' => 'Grandes igrejas, catedrais e ministérios com múltiplas atividades que necessitam de gestão complexa.',
                'price' => 'R$ 299,90',
                'link' => '#',
                'items' => json_encode([
                    [
                        'name' => 'Tudo do Plano Completo',
                        'description' => '',
                    ],

                    [
                        'name' => 'Gestão Financeira e Relatórios',
                        'description' => '',
                    ],

                    [
                        'name' => 'Escala de Voluntários',
                        'description' => '',
                    ],

                    [
                        'name' => 'Gestão de Pequenos Grupos (Células)',
                        'description' => '',
                    ],

                    [
                        'name' => 'Backup Diário dos Dados',
                        'description' => '',
                    ],

                    [
                        'name' => 'Suporte 24/7 Dedicado',
                        'description' => '',
                    ],

                    [
                        'name' => '5x E-mails Profissional',
                        'description' => '(contato@nomedosite.com.br)',
                    ]
                ]),
                'resources' => json_encode([
                    [
                        'name' => 'Gestão de células/pequenos grupos com relatórios',
                    ],

                    [
                        'name' => 'Escala automatizada de voluntários e diíaconos',
                    ],

                    [
                        'name' => 'Suporte VIP para a equipe de mídia da igreja',
                    ]

                ]),
                'order' => 3,
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
