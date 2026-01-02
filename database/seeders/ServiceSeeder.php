<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Desenvolvimento de site',
                'slug' => 'desenvolvimento-de-site',
                'description' => 'Criamos sites personalizados, modernos e responsivos, com foco em performance, segurança e boa experiência para seus visitantes.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Desenvolvimento de sistemas',
                'slug' => 'desenvolvimento-de-sistemas',
                'description' => 'Soluções exclusivas e sob medida (painéis, sistemas internos e integrações) com tecnologia escalável e eficiente.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Manutenção',
                'slug' => 'manutencao',
                'description' => 'Ajustes, melhorias e correções para manter seu site sempre atualizado, estável e seguro.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Suporte técnico',
                'slug' => 'suporte-tecnico',
                'description' => 'Atendimento direto por WhatsApp em horário comercial para resolver dúvidas e problemas com agilidade.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Hospedagem',
                'slug' => 'hospedagem',
                'description' => 'Serviço de hospedagem dedicado para manter seu site sempre online com velocidade e segurança.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Domínio',
                'slug' => 'dominio',
                'description' => 'Registro e configuração do seu endereço na internet (ex: nomedaigreja.com.br) sem complicação.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'SEO',
                'slug' => 'seo',
                'description' => 'Estruturamos seu site para melhorar a visibilidade nos buscadores, com boas práticas de otimização técnica e performance.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Consultoria',
                'slug' => 'consultoria',
                'description' => 'Orientação estratégica para decisões sobre presença digital, conteúdo e crescimento online.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
