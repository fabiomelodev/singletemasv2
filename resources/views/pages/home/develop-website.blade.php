<section class="pb-20 px-4 sm:px-6 lg:px-8" id="site">

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">
            <h2 class="section-title">
                Desenvolvimento de Sites
            </h2>

            <p class="section-description">
                Crie um site profissional e atraente para o seu negócio com a Single Temas. Oferecemos soluções
                personalizadas que atendem às suas necessidades específicas, garantindo uma presença online forte e
                eficaz
            </p>
        </div>

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
                'whatsapp_text' => 'Quero desenvolver meu site personalizado. Como posso prosseguir?'
            ];
        @endphp

        <x-home.develop-item :card="$card" />
    </div>
</section>