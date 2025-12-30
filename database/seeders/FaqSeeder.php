<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faqs')->insert([
            [
                'name' => 'Preciso de alguém técnico na igreja para cuidar do site?',
                'description' => 'Não! Nossa plataforma é intuitiva. Qualquer pessoa da secretaria ou mídia da igreja pode atualizar agenda, postar fotos ou devocionais. Além disso, a Single Temas cuida de toda a parte técnica de hospedagem e segurança.',
                'is_home' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'É possível ter o sermão/culto ao vivo no site?',
                'description' => 'Sim! Nos planos Essencial, Completo e Premium, integramos facilmente com seu canal do YouTube ou Facebook. Seus membros podem assistir aos cultos ao vivo ou gravados diretamente pelo site da igreja.',
                'is_home' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Como funciona a gestão de membros e células?',
                'description' => 'No Plano Completo e Premium, você tem acesso a um painel administrativo onde pode cadastrar membros, registrar visitantes, organizar pequenos grupos (células) e acompanhar o crescimento da congregação com relatórios.',
                'is_home' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'O suporte funciona nos finais de semana (horário de culto)?',
                'description' => 'Entendemos que igrejas têm maior atividade aos finais de semana. Por isso, o Plano Premium oferece suporte 24/7, garantindo que tudo funcione perfeitamente durante seus cultos e eventos principais.',
                'is_home' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Posso usar um domínio próprio (www.minhaigreja.com.br)?',
                'description' => 'Com certeza! Nós ajudamos a configurar seu domínio personalizado em qualquer plano. Isso traz mais credibilidade e facilita para que as pessoas encontrem sua igreja na internet.',
                'is_home' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Existe fidelidade ou multa de cancelamento?',
                'description' => 'Trabalhamos para o Reino e queremos abençoar, não prender. Não há contratos de fidelidade ou multas. Você pode cancelar a qualquer momento se sentir que a plataforma não atende mais suas necessidades.',
                'is_home' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
