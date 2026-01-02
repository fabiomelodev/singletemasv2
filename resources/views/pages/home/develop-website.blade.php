<section class="pb-20 px-4 sm:px-6 lg:px-8" id="site">

    <div class="max-w-7xl mx-auto">

        <div class="grid grid-cols-1">
            @php
                $cards = [
                    [
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
                    ],

                    // [
                    //     'phrase' => 'Adquira um site modelo padrão',
                    //     'price' => 'R$ 99,90',
                    //     'models' => [
                    //         'Landing Page',
                    //     ],
                    //     'resources' => [
                    //         'Painel de controle',
                    //         'Imagens e textos editáveis',
                    //         'Responsivo',
                    //         'SEO',
                    //         'Formulário para contato',
                    //         'Integrações com Whatsapp e mapa',
                    //         'Garantia com manutenção e suporte por 3 meses'
                    //     ],
                    //     'link' => '#'
                    // ],
                ];
            @endphp

            @foreach($cards as $card)
                <div
                    class="border border-purple-500/20 rounded-2xl overflow-hidden grid grid-cols-2 gap-6 bg-slate-900/50 backdrop-blur-sm p-10">

                    <div class="pt-6">

                        <h3 class="text-xl font-semibold text-white">
                            {{  $card['phrase'] }}

                            <span class="block text-7xl font-black text-white">
                                {{  $card['price'] }}
                            </span>
                        </h3>

                        <div class="mt-6">
                            <p class="font-medium text-white">
                                Modelos de sites:
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-4 mt-2">

                            @foreach($card['models'] as $model)
                                <div
                                    class="transition hover:scale-110 border border-purple-500/30 rounded-full inline-flex items-center gap-2 bg-purple-600/20 hover:bg-purple-600/60 backdrop-blur-sm py-2 px-4">

                                    <span class="text-sm text-purple-300">
                                        {{  $model }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-6">
                        <p class="text-sm font-semibold text-gray-400 mb-3">
                            Principais Recursos:
                        </p>

                        <ul class="space-y-2">
                            @foreach($card['resources'] as $resource)
                                <li class="flex items-start gap-2">
                                    <span class="plan-detail-item-list-item-pointer text-purple-400">•</span>
                                    <span class="text-gray-300">
                                        {{  $resource }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>

                        <div class="flex mt-12">
                            <x-button-cta />
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>