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
                'description' => 'Criamos sites modernos, rápidos e totalmente personalizados para sua necessidade. Trabalhamos com programação e WordPress, sempre utilizando plugins atualizados para garantir desempenho, segurança e estabilidade. Todos os projetos são responsivos (adaptados para celular, tablet e computador), dinâmicos e preparados para oferecer a melhor experiência ao usuário.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Desenvolvimento de sistemas',
                'slug' => 'desenvolvimento-de-sistemas',
                'description' => 'Desenvolvemos sistemas sob medida utilizando Laravel, um dos frameworks mais robustos e seguros do mercado. Através dele, entregamos soluções escaláveis, práticas e que atendem processos específicos de cada cliente, como sistemas de gestão, controle interno ou ferramentas exclusivas.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Manutenção',
                'slug' => 'manutencao',
                'description' => 'Se o seu site apresenta algum problema, lentidão ou precisa de atualizações, oferecemos um serviço completo de manutenção corretiva e preventiva. Cuidamos desde pequenos ajustes até melhorias mais complexas, sempre visando manter o site estável, atualizado e seguro.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Suporte técnico',
                'slug' => 'suporte-tecnico',
                'description' => 'Disponibilizamos suporte dedicado 8x5 (de segunda a sexta-feira em horário comercial), com atendimento direto pelo WhatsApp. Isso garante agilidade na comunicação, rápida solução de problemas e acompanhamento próximo das necessidades do seu projeto.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Hospedagem',
                'slug' => 'hospedagem',
                'description' => 'Hospedagem rápida, segura e estável para manter seu site sempre online, com backups e monitoramento contínuo.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Domínio',
                'slug' => 'dominio',
                'description' => 'Cuidamos do registro e renovação do domínio para que seu site continue acessível sem preocupações técnicas.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'SEO',
                'slug' => 'seo',
                'description' => 'Aplicamos boas práticas de SEO para que seu site seja bem estruturado, rápido e preparado para ser encontrado no Google. O trabalho inclui otimização técnica, organização do conteúdo e performance, criando uma base sólida para crescimento orgânico ao longo do tempo.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Consultoria',
                'slug' => 'consultoria',
                'description' => 'Orientação técnica e estratégica para melhorar o site, organizar conteúdos e apoiar decisões digitais com clareza.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
