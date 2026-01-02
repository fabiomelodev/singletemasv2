<section class="pt-20 px-4 sm:px-6 lg:px-8" id="template">

    <div class="max-w-7xl mx-auto">

        <div class="grid grid-cols-1">
            @php
                $cards = [
                    // [
                    //     'phrase' => 'Desenvolva o seu site a partir',
                    //     'price' => 'R$ 590,90',
                    //     'models' => [
                    //         'Institucional',
                    //         'Landing Page',
                    //         'Portal',
                    //         'Blog',
                    //     ],
                    //     'resources' => [
                    //         'Layout único',
                    //         'Painel de controle',
                    //         'Imagens e textos editáveis',
                    //         'Responsivo',
                    //         'SEO',
                    //         'Formulário para contato',
                    //         'Formulário para membros',
                    //         'Integrações com Whatsapp e mapa',
                    //         'Pedido de oração',
                    //         'Garantia com manutenção e suporte por 3 meses'
                    //     ],
                    //     'link' => '#'
                    // ],

                    [
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
                    ],
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
                            <x-button-cta
                                url="https://wa.me/5511998043538?text=Quero meu site pronto. Como posso prosseguir?" />
                        </div>
                    </div>

                    <div class="col-span-full flex justify-center">
                        <div
                            class="shadow-lg border border-blue-500/20 rounded-lg inline-flex gap-x-2 items-center bg-slate-900/50 mt-8 p-4">
                            <svg class="w-8 h-8 fill-purple-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM320 384C302.3 384 288 398.3 288 416C288 433.7 302.3 448 320 448C337.7 448 352 433.7 352 416C352 398.3 337.7 384 320 384zM320 192C301.8 192 287.3 207.5 288.6 225.7L296 329.7C296.9 342.3 307.4 352 319.9 352C332.5 352 342.9 342.3 343.8 329.7L351.2 225.7C352.5 207.5 338.1 192 319.8 192z">
                                </path>
                            </svg>

                            <p class="text-sm font-semibold text-purple-400">
                                Após fazer seu site (modelo ou personalizado), escolha um dos planos mensais para garantir
                                que ele continue funcionando, seguro e com suporte.
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>