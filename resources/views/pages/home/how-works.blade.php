<section class="pt-20 pb-10 lg:pb-20 px-4 sm:px-6 lg:px-8" id="como-funciona">

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">
            <h2 class="section-title">
                {{ $settings->mode_section_title }}
                {{-- Como Funciona Nosso Modelo de Trabalho --}}
            </h2>

            <p class="section-description">
                {{  $settings->mode_section_description }}
                {{-- Nosso modelo foi criado para oferecer clareza, qualidade e continuidade, garantindo que sua igreja tenha
                um site profissional hoje — e continue bem cuidada no futuro. --}}
            </p>
        </div>

        <div class="mb-8">
            <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-center text-white mb-4">
                Trabalhamos em duas etapas complementares:
            </h2>
        </div>

        <div class="flex flex-col gap-y-6">

            @foreach($settings->mode_steps as $step)
                <div class="plan-detail-item">

                    <div class="flex flex-col lg:flex-row items-start gap-6">

                        <div class="plan-detail-item-icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="plan-detail-item-icon">
                                <path
                                    d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                </path>
                                <path
                                    d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                </path>
                                <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="plan-detail-item-icon">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                <polyline points="16 7 22 7 22 13"></polyline>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="plan-detail-item-icon">
                                <path
                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                </path>
                                <circle cx="12" cy="8" r="6"></circle>
                            </svg>
                        </div>

                        <div class="flex-1">
                            <h3 class="plan-detail-item-title">
                                {{  $step['name'] }}
                                {{-- Desenvolvimento do site --}}
                            </h3>

                            <p class="plan-detail-item-description">
                                {{  $step['description'] }}
                                {{-- Nesta primeira etapa, realizamos o desenvolvimento do site da sua empresa, de forma
                                personalizada e profissional. --}}
                            </p>

                            <div class="mt-6">
                                <p class="text-sm font-semibold text-white mb-3">
                                    {{  $step['items_title_first'] }}
                                    {{-- Aqui o foco é: --}}
                                </p>

                                <ul class="space-y-2">
                                    @foreach($step['items_first'] as $item)
                                        <li class="flex items-start gap-2">
                                            <span class="plan-detail-item-list-item-pointer">•</span>
                                            <span class="text-gray-300">
                                                {{ $item['name'] }}
                                                {{-- Criar um site único (não é modelo pronto) --}}
                                            </span>
                                        </li>
                                    @endforeach

                                    {{-- <li class="flex items-start gap-2">
                                        <span class="plan-detail-item-list-item-pointer">•</span>
                                        <span class="text-gray-300">
                                            Pensar na identidade e necessidades da sua empresa
                                        </span>
                                    </li>

                                    <li class="flex items-start gap-2">
                                        <span class="plan-detail-item-list-item-pointer">•</span>
                                        <span class="text-gray-300">
                                            Entregar uma estrutura sólida, rápida e organizada
                                        </span>
                                    </li> --}}
                                </ul>
                            </div>

                            @if($step['items_title_second'] && $step['items_second'])
                                <div class="mt-10">
                                    <p class="text-sm font-semibold text-white mb-3">
                                        {{ $step['items_title_second'] }}
                                        {{-- O desenvolvimento tem um valor fechado, definido antes do início do projeto, e inclui: --}}
                                    </p>

                                    <ul class="space-y-2">
                                        @foreach($step['items_second'] as $item)
                                            <li class="flex items-start gap-2">
                                                <span class="plan-detail-item-list-item-pointer">•</span>
                                                <span class="text-gray-300">
                                                    {{  $item['name'] }}
                                                    {{-- Layout personalizado --}}
                                                </span>
                                            </li>
                                        @endforeach

                                        {{-- <li class="flex items-start gap-2">
                                            <span class="plan-detail-item-list-item-pointer">•</span>
                                            <span class="text-gray-300">
                                                Site responsivo (celular, tablet e computador)
                                            </span>
                                        </li>

                                        <li class="flex items-start gap-2">
                                            <span class="plan-detail-item-list-item-pointer">•</span>
                                            <span class="text-gray-300">
                                                Integrações essenciais (WhatsApp, YouTube, Maps)
                                            </span>
                                        </li>

                                        <li class="flex items-start gap-2">
                                            <span class="plan-detail-item-list-item-pointer">•</span>
                                            <span class="text-gray-300">
                                                Funcionalidades como pedido de oração
                                            </span>
                                        </li>

                                        <li class="flex items-start gap-2">
                                            <span class="plan-detail-item-list-item-pointer">•</span>
                                            <span class="text-gray-300">
                                                Publicação do site no ar
                                            </span>
                                        </li> --}}
                                    </ul>

                                    
                                </div>
                            @endif

                            <div
                                class="plan-detail-item-wrapper-notice">
                                <svg class="plan-detail-item-notice-icon" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path
                                        d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM320 384C302.3 384 288 398.3 288 416C288 433.7 302.3 448 320 448C337.7 448 352 433.7 352 416C352 398.3 337.7 384 320 384zM320 192C301.8 192 287.3 207.5 288.6 225.7L296 329.7C296.9 342.3 307.4 352 319.9 352C332.5 352 342.9 342.3 343.8 329.7L351.2 225.7C352.5 207.5 338.1 192 319.8 192z" />
                                </svg>

                                <p class="plan-detail-item-notice-text">
                                    {{  $step['notice'] }}
                                    {{-- Esse valor corresponde à construção do site, como um ativo digital da empresa. --}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="plan-detail-item">

                <div class="flex flex-col lg:flex-row items-start gap-6">

                    <div class="plan-detail-item-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="plan-detail-item-icon">
                            <path
                                d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                            </path>
                            <path
                                d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                            </path>
                            <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                            <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="plan-detail-item-icon">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                            <polyline points="16 7 22 7 22 13"></polyline>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="plan-detail-item-icon">
                            <path
                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                            </path>
                            <circle cx="12" cy="8" r="6"></circle>
                        </svg>
                    </div>

                    <div class="flex-1">
                        <h3 class="plan-detail-item-title">
                            Plano de continuidade
                        </h3>

                        <p class="plan-detail-item-description">
                            Após o site pronto, a sua empresa passa a contar com um plano mensal de continuidade, que
                            garante
                            que tudo continue funcionando, seguro e atualizado.
                        </p>

                        <div class="mt-6">
                            <p class="text-sm font-semibold text-white mb-3">
                                O plano mensal inclui:
                            </p>

                            <ul class="space-y-2">
                                <li class="flex items-start gap-2">
                                    <span class="plan-detail-item-list-item-pointer">•</span>
                                    <span class="text-gray-300">
                                        Hospedagem profissional
                                    </span>
                                </li>

                                <li class="flex items-start gap-2">
                                    <span class="plan-detail-item-list-item-pointer">•</span>
                                    <span class="text-gray-300">
                                        Domínio
                                    </span>
                                </li>

                                <li class="flex items-start gap-2">
                                    <span class="plan-detail-item-list-item-pointer">•</span>
                                    <span class="text-gray-300">
                                        E-mails institucionais
                                    </span>
                                </li>

                                <li class="flex items-start gap-2">
                                    <span class="plan-detail-item-list-item-pointer">•</span>
                                    <span class="text-gray-300">
                                        Suporte técnico
                                    </span>
                                </li>

                                <li class="flex items-start gap-2">
                                    <span class="plan-detail-item-list-item-pointer">•</span>
                                    <span class="text-gray-300">
                                        Manutenção e atualizações
                                    </span>
                                </li>

                                <li class="flex items-start gap-2">
                                    <span class="plan-detail-item-list-item-pointer">•</span>
                                    <span class="text-gray-300">
                                        Backups e segurança
                                    </span>
                                </li>

                                <li class="flex items-start gap-2">
                                    <span class="plan-detail-item-list-item-pointer">•</span>
                                    <span class="text-gray-300">
                                        Acesso a módulos do nosso sistema (como pedidos de oração, agenda e outros)
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <div
                            class="shadow-lg border border-blue-500/20 rounded-lg inline-flex gap-x-2 items-center bg-slate-900/50 mt-8 p-4">
                            <svg class="w-8 h-8 fill-purple-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM320 384C302.3 384 288 398.3 288 416C288 433.7 302.3 448 320 448C337.7 448 352 433.7 352 416C352 398.3 337.7 384 320 384zM320 192C301.8 192 287.3 207.5 288.6 225.7L296 329.7C296.9 342.3 307.4 352 319.9 352C332.5 352 342.9 342.3 343.8 329.7L351.2 225.7C352.5 207.5 338.1 192 319.8 192z" />
                            </svg>

                            <p class="text-sm font-semibold text-purple-400">
                                O plano mensal não é o pagamento do site, e sim o cuidado contínuo com ele.
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        <!-- desktop -->
        <div class="hidden lg:grid grid-cols-3 gap-x-6 mt-10">
            @foreach($settings->mode_objectives as $index => $objective)
                <x-home.objective-item name="{{ $objective['name'] }}" description="{!! $objective['description'] !!}" index="{{  $index }}" />
            @endforeach
        </div>
        <!-- desktop -->

        <!-- mobile -->
        <div class="lg:hidden mt-10">

            <div class="swiper js-swiper-objectives">

                <div class="swiper-wrapper h-[unset!important]">

                    <!-- slide -->
                    @foreach($settings->mode_objectives as $index => $objective)
                        <div class="swiper-slide">
                            <x-home.objective-item name="{{ $objective['name'] }}" description="{!! $objective['description'] !!}" index="{{  $index }}" />
                        </div>
                    @endforeach
                    <!-- end slide -->
                </div>
            </div>

            <div class="relative mt-8">
                <div class="swiper-pagination js-swiper-pagination-objectives"></div>
            </div>
        </div>
        <!-- end mobile -->
    </div>
</section>