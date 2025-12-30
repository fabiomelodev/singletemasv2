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
                'description' => ' organização dos eventos e inscrições para o retiro de jovens ficou muito mais simples. Não perdemos mais tempo com planilhas manuais.',
                'plan' => 'Plano Completo',
                'niche_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Pe. João Carlos',
                'office' => 'Paróquia Santo Antônio',
                'description' => 'recisávamos de um site para divulgar os horários das missas e a Single Temas nos atendeu perfeitamente. Simples, bonito e funcional.',
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
