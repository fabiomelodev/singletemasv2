<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Desenvolvimento de Sites',
                'slug' => 'desenvolvimento-de-sites',
                'section_title' => 'Desenvolva o seu site',
                'description' => 'Crie um site profissional e atraente para o seu negócio com a Single Temas. Oferecemos soluções personalizadas que atendem às suas necessidades específicas, garantindo uma presença online forte e eficaz',
                'phrase' => 'Desenvolva o seu site a partir',
                'price' => 'R$ 590,90',
                'modules' => json_encode([
                    [
                        'name' => 'Institucional'
                    ],

                    [
                        'name' => 'Landing Page'
                    ],

                    [
                        'name' => 'Portal'
                    ],

                    [
                        'name' => 'Blog'
                    ],
                ]),
                'resources' => json_encode([
                    [
                        'name' => 'Layout único'
                    ],

                    [
                        'name' => 'Painel de controle'
                    ],

                    [
                        'name' => 'Imagens e textos editáveis'
                    ],

                    [
                        'name' => 'Responsivo'
                    ],

                    [
                        'name' => 'SEO'
                    ],

                    [
                        'name' => 'Formulário para contato'
                    ],

                    [
                        'name' => 'Formulário para membros'
                    ],

                    [
                        'name' => 'Integrações com Whatsapp e mapa'
                    ],

                    [
                        'name' => 'Pedido de oração'
                    ],

                    [
                        'name' => 'Garantia com manutenção e suporte por 3 meses'
                    ],
                ]),
                'button_text' => 'Quero desenvolver o meu site. Como posso prosseguir?',
                'button_link' => 'https://wa.me/5511998043538',
                'niche_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Site Modelo Pronto',
                'slug' => 'site-modelo-pronto',
                'section_title' => 'Tenha um Site Modelo Pronto',
                'description' => 'Adquira um site modelo padrão, desenvolvido para atender às necessidades básicas do seu negócio, garantindo uma presença online eficaz e profissional',
                'phrase' => 'Adquira um site modelo padrão',
                'price' => 'R$ 99,90',
                'modules' => json_encode([
                    [
                        'name' => 'Landing Page'
                    ]
                ]),
                'resources' => json_encode([
                    [
                        'name' => 'Painel de controle'
                    ],

                    [
                        'name' => 'Imagens e textos editáveis'
                    ],

                    [
                        'name' => 'Responsivo'
                    ],

                    [
                        'name' => 'SEO'
                    ],

                    [
                        'name' => 'Formulário para contato'
                    ],

                    [
                        'name' => 'Garantia com manutenção e suporte por 3 meses'
                    ],
                ]),
                'button_text' => 'Quero comprar um site pronto. Como posso prosseguir?',
                'button_link' => 'https://wa.me/5511998043538',
                'niche_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
