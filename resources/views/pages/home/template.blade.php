<section class="pt-20 px-4 sm:px-6 lg:px-8" id="template">

    <div class="max-w-7xl mx-auto">

        @php
            $card = [
                'phrase' => 'Adquira um site modelo padrão',
                'price' => 'R$ 99,90',
                'models' => [
                    'Landing Page',
                ],
                'resources' => [
                    'Painel de controle',
                    'Imagens e textos editáveis',
                    'Responsivo',
                    'SEO',
                    'Formulário para contato',
                    'Integrações com Whatsapp e mapa',
                    'Garantia com manutenção e suporte por 3 meses'
                ],
                'link' => '#'
            ];
        @endphp

        <x-home.develop-item :card="$card" />
    </div>
</section>
