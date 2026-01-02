<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            [
                'name' => 'Fernanda Lopes',
                'office' => 'Clínica Vida Plena',
                'description' => 'O site foi desenvolvido de forma personalizada, respeitando a identidade da empresa. Além disso, o plano mensal resolve tudo: hospedagem, suporte e manutenção. Isso facilita muito o nosso dia a dia.',
                'plan' => 'Plano Premium',
                'niche_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Ricardo Mendes',
                'office' => 'Mendes Soluções Elétricas',
                'description' => 'O site ficou rápido, organizado e profissional. Ter um plano mensal com suporte nos deixa seguros, pois sabemos que o site está sempre atualizado e funcionando corretamente.',
                'plan' => 'Plano Essencial',
                'niche_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Juliana Costa',
                'office' => 'Espaço Saúde & Bem-Estar',
                'description' => 'O site foi pensado para conversão e presença online. Além disso, não precisamos nos preocupar com domínio, hospedagem ou atualizações. Está tudo incluso no plano.',
                'plan' => 'Plano Essencial',
                'niche_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Eduardo Martins',
                'office' => 'Martins & Souza Contabilidade',
                'description' => 'O atendimento foi consultivo desde o início. O site foi desenvolvido sob medida e o plano mensal nos dá segurança para manter tudo funcionando sem dores de cabeça.',
                'plan' => 'Plano Completo',
                'niche_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Pr. Marcos Silva',
                'office' => 'Igreja Batista Renovada',
                'description' => 'O Plano Premium revolucionou nossa gestão. O sistema de dízimos online facilitou muito para os membros, e o aplicativo próprio da igreja nos aproximou dos jovens.',
                'plan' => 'Plano Premium',
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Ana Souza',
                'office' => 'Secretária, Comunidade da Fé',
                'description' => 'A organização dos eventos e inscrições para o retiro de jovens ficou muito mais simples. Não perdemos mais tempo com planilhas manuais.',
                'plan' => 'Plano Completo',
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Pe. João Carlos',
                'office' => 'Paróquia Santo Antônio',
                'description' => 'Precisávamos de um site para divulgar os horários das missas e a Single Temas nos atendeu perfeitamente. Simples, bonito e funcional.',
                'plan' => 'Plano Essencial',
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Ricardo Oliveira',
                'office' => 'Líder de Jovens',
                'description' => 'O blog de devocionais tem sido uma bênção. Conseguimos compartilhar estudos bíblicos e manter a galera conectada durante a semana toda.',
                'plan' => 'Plano Completo',
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Pra. Lúcia Santos',
                'office' => 'Ministério Vida Nova',
                'description' => 'Excelente custo-benefício. Agora temos um canal oficial para receber pedidos de oração e divulgar nossos trabalhos sociais.',
                'plan' => 'Plano Essencial',
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Felipe Mendes',
                'office' => 'Tesoureiro, Igreja Presbiteriana',
                'description' => 'A integração da livraria online e a gestão de doações são fantásticas. Transparência e facilidade que buscávamos há tempos.',
                'plan' => 'Plano Premium',
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
