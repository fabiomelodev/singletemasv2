<section class="pb-20 px-4 sm:px-6 lg:px-8" id="site">

    <div class="max-w-7xl mx-auto">

        @php
            $card = [
                'phrase' => 'Desenvolva o seu site a partir',
                'price' => 'R$ 590,90',
                'models' => [
                    'Institucional',
                    'Landing Page',
                    'Portal',
                    'Blog',
                ],
                'resources' => [
                    'Layout único',
                    'Painel de controle',
                    'Imagens e textos editáveis',
                    'Responsivo',
                    'SEO',
                    'Formulário para contato',
                    'Formulário para membros',
                    'Integrações com Whatsapp e mapa',
                    'Pedido de oração',
                    'Garantia com manutenção e suporte por 3 meses'
                ],
                'link' => '#'
            ];
        @endphp

        <x-home.develop-item :card="$card" />
    </div>
</section>
