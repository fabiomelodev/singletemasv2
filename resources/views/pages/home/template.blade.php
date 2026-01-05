<section class="pt-20 px-4 sm:px-6 lg:px-8" id="template">

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">
            <h2 class="section-title">
                Tenha um Site Modelo Pronto
            </h2>

            <p class="section-description">
                Adquira um site modelo padrão, desenvolvido para atender às necessidades básicas do seu negócio,
                garantindo uma presença online eficaz e profissional
            </p>
        </div>

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
                'whatsapp_text' => 'Quero um site modelo pronto. Como posso prosseguir?'
            ];
        @endphp

        <x-home.develop-item :card="$card" />
    </div>
</section>