<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        // ---- Seção de Valores (projetos / pagamento único) ----
        $this->migrator->add('groupPageHome.prices_section_title', 'Nossos Valores');
        $this->migrator->add(
            'groupPageHome.prices_section_description',
            'Escolha o formato ideal para o seu projeto. Sem letras miúdas — o que você vê é o que paga.'
        );
        $this->migrator->add('groupPageHome.prices', [
            [
                'name' => 'Landing Page',
                'tagline' => 'Página única de alta conversão',
                'price' => 'R$ 890,00',
                'note' => 'pagamento único',
                'featured' => false,
                'features' => [
                    'Página única focada em conversão',
                    'Design moderno e 100% responsivo',
                    'Formulário de contato',
                    'Integração com WhatsApp',
                    'Otimização SEO essencial',
                    'Configuração e publicação',
                ],
            ],
            [
                'name' => 'Site Institucional',
                'tagline' => 'Presença digital completa',
                'price' => 'R$ 1.560,00',
                'note' => 'pagamento único',
                'featured' => true,
                'features' => [
                    'Várias páginas (Home, Sobre, Serviços, Contato...)',
                    'Painel para editar textos e imagens',
                    'Blog / área de notícias',
                    'Integração com WhatsApp e mapa',
                    'SEO e design exclusivo',
                    'Suporte e manutenção por 3 meses',
                ],
            ],
            [
                'name' => 'Sistemas Sob Medida',
                'tagline' => 'Soluções e automações exclusivas',
                'price' => 'Sob consulta',
                'note' => 'escopo personalizado',
                'featured' => false,
                'features' => [
                    'Sistemas e painéis administrativos',
                    'Integrações com APIs e serviços',
                    'Automação de processos internos',
                    'Tecnologia escalável e segura',
                    'Análise de requisitos dedicada',
                    'Orçamento conforme o projeto',
                ],
            ],
        ]);

        // ---- Seção de Planos de Continuidade (mensais) ----
        $this->migrator->add('groupPageHome.continuity_section_title', 'Planos de Continuidade');
        $this->migrator->add(
            'groupPageHome.continuity_section_description',
            'Depois do site pronto, escolha o plano mensal que mantém tudo funcionando: hospedagem, e-mail, backups, suporte e manutenção contínua.'
        );
        $this->migrator->add('groupPageHome.continuity_plans', [
            [
                'name' => 'Plano Essencial',
                'tagline' => 'O necessário para seu site no ar',
                'price' => 'R$ 39,90',
                'period' => '/mês',
                'featured' => false,
                'features' => [
                    'Serviços de Hospedagem',
                    '1x E-mail profissional',
                    'Backups semanal',
                    'Suporte dedicado',
                    'Manutenção corretiva e preventiva',
                ],
            ],
            [
                'name' => 'Plano Premium',
                'tagline' => 'Mais recursos e backups diários',
                'price' => 'R$ 59,90',
                'period' => '/mês',
                'featured' => true,
                'features' => [
                    'Serviços de Hospedagem',
                    '3x E-mail profissional',
                    'Backups diário',
                    'Suporte dedicado',
                    'Manutenção corretiva e preventiva',
                ],
            ],
        ]);
        $this->migrator->add(
            'groupPageHome.continuity_notice_title',
            'O domínio não está incluso nos planos de continuidade'
        );
        $this->migrator->add(
            'groupPageHome.continuity_notice_text',
            'Em ambos os planos, o domínio (o endereço do seu site, ex.: seusite.com.br) não está incluído e deve ser contratado à parte pelo próprio cliente, diretamente em uma plataforma de registro como o Registro.BR. Se precisar, te orientamos no passo a passo do registro.'
        );
    }

    public function down(): void
    {
        $this->migrator->deleteIfExists('groupPageHome.prices_section_title');
        $this->migrator->deleteIfExists('groupPageHome.prices_section_description');
        $this->migrator->deleteIfExists('groupPageHome.prices');
        $this->migrator->deleteIfExists('groupPageHome.continuity_section_title');
        $this->migrator->deleteIfExists('groupPageHome.continuity_section_description');
        $this->migrator->deleteIfExists('groupPageHome.continuity_plans');
        $this->migrator->deleteIfExists('groupPageHome.continuity_notice_title');
        $this->migrator->deleteIfExists('groupPageHome.continuity_notice_text');
    }
};
