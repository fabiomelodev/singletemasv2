<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('processes')->insert(
            [
                [
                    'name' => 'Escolha do domínio',
                    'description' => 'Você escolhe o endereço do seu site e cuidamos de todo o registro e configuração.',
                    'order' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'name' => 'Envio do briefing',
                    'description' => 'Nos envia informações essenciais para entendermos sua necessidade.',
                    'order' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'name' => 'Proposta de layout',
                    'description' => 'Criamos um visual exclusivo para você revisar e aprovar.',
                    'order' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'name' => 'Desenvolvimento do site',
                    'description' => 'Transformamos o layout aprovado em um site funcional.',
                    'order' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'name' => 'Versão de aprovação',
                    'description' => 'Você revisa e confirma o site antes de publicarmos.',
                    'order' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'name' => 'Assinatura do plano mensal',
                    'description' => 'Escolha o plano que garante manutenção, suporte e continuidade ao seu site.',
                    'order' => 6,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'name' => 'Publicação online',
                    'description' => 'Configuramos tudo para seu site ficar no ar.',
                    'order' => 7,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'name' => 'Entrega de acessos',
                    'description' => 'Enviamos os dados para você acessar e administrar o site.',
                    'order' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
