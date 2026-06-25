@php
    $phone = '5511998043538';
    $plans = [
        [
            'name' => 'Landing Page',
            'tagline' => 'Página única de alta conversão',
            'price' => 'R$ 890',
            'cents' => ',00',
            'note' => 'pagamento único',
            'featured' => false,
            'icon' => 'bolt',
            'features' => [
                'Página única focada em conversão',
                'Design moderno e 100% responsivo',
                'Formulário de contato',
                'Integração com WhatsApp',
                'Otimização SEO essencial',
                'Configuração e publicação',
            ],
            'message' => 'Olá! Tenho interesse no desenvolvimento de uma Landing Page (R$ 890,00). Como prosseguir?',
        ],
        [
            'name' => 'Site Institucional',
            'tagline' => 'Presença digital completa',
            'price' => 'R$ 1.560',
            'cents' => ',00',
            'note' => 'pagamento único',
            'featured' => true,
            'icon' => 'globe',
            'features' => [
                'Várias páginas (Home, Sobre, Serviços, Contato...)',
                'Painel para editar textos e imagens',
                'Blog / área de notícias',
                'Integração com WhatsApp e mapa',
                'SEO e design exclusivo',
                'Suporte e manutenção por 3 meses',
            ],
            'message' => 'Olá! Tenho interesse no desenvolvimento de um Site Institucional (R$ 1.560,00). Como prosseguir?',
        ],
        [
            'name' => 'Sistemas Sob Medida',
            'tagline' => 'Soluções e automações exclusivas',
            'price' => 'Sob consulta',
            'cents' => '',
            'note' => 'escopo personalizado',
            'featured' => false,
            'icon' => 'cpu',
            'features' => [
                'Sistemas e painéis administrativos',
                'Integrações com APIs e serviços',
                'Automação de processos internos',
                'Tecnologia escalável e segura',
                'Análise de requisitos dedicada',
                'Orçamento conforme o projeto',
            ],
            'message' => 'Olá! Preciso de um sistema sob medida e gostaria de um orçamento. Pode me ajudar?',
        ],
    ];
@endphp

<section class="section bg-slate-50 relative overflow-hidden" id="valores">
    <div class="absolute inset-0 bg-grid opacity-60"></div>

    <div class="max-w-7xl relative mx-auto">
        <div class="mb-14 text-center">
            <span class="eyebrow mb-4">Valores transparentes</span>
            <h2 class="section-title">Nossos Valores</h2>
            <p class="section-description">
                Escolha o formato ideal para o seu projeto. Sem letras miúdas — o que você vê é o que paga.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
            @foreach($plans as $plan)
                <div @class([
                    'relative flex flex-col rounded-3xl p-8 transition-all duration-300',
                    'bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1' => !$plan['featured'],
                    'bg-white border-2 border-brand-500 ring-4 ring-brand-500/10 shadow-2xl shadow-brand-600/15 lg:-translate-y-4' => $plan['featured'],
                ])>

                    @if($plan['featured'])
                        <span class="absolute -top-4 left-1/2 -translate-x-1/2 rounded-full bg-linear-to-r from-brand-600 to-accent-600 text-white text-xs font-bold uppercase tracking-wide shadow-lg shadow-brand-600/30 py-1.5 px-4">
                            ⭐ Mais popular
                        </span>
                    @endif

                    <div class="flex items-center gap-3 mb-5">
                        <span @class([
                            'flex items-center justify-center w-12 h-12 rounded-2xl',
                            'bg-brand-50 text-brand-600' => !$plan['featured'],
                            'bg-linear-to-br from-brand-600 to-accent-600 text-white shadow-lg shadow-brand-600/30' => $plan['featured'],
                        ])>
                            @switch($plan['icon'])
                                @case('bolt')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/>
                                    </svg>
                                    @break
                                @case('globe')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/>
                                    </svg>
                                    @break
                                @default
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="16" height="16" x="4" y="4" rx="2"/><rect width="6" height="6" x="9" y="9" rx="1"/><path d="M15 2v2"/><path d="M15 20v2"/><path d="M2 15h2"/><path d="M2 9h2"/><path d="M20 15h2"/><path d="M20 9h2"/><path d="M9 2v2"/><path d="M9 20v2"/>
                                    </svg>
                            @endswitch
                        </span>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900">{{ $plan['name'] }}</h3>
                            <p class="text-sm text-slate-400">{{ $plan['tagline'] }}</p>
                        </div>
                    </div>

                    <div class="mb-6 pb-6 border-b border-slate-100">
                        <div class="flex items-end gap-1">
                            <span class="text-4xl sm:text-5xl font-extrabold text-slate-900">{{ $plan['price'] }}</span>
                            @if($plan['cents'])
                                <span class="text-xl font-bold text-slate-900 mb-1">{{ $plan['cents'] }}</span>
                            @endif
                        </div>
                        <p class="text-sm text-slate-400 mt-1">{{ $plan['note'] }}</p>
                    </div>

                    <ul class="space-y-3 mb-8 flex-1">
                        @foreach($plan['features'] as $feature)
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"
                                    class="w-5 h-5 text-brand-600 flex-shrink-0 mt-0.5">
                                    <path d="M20 6 9 17l-5-5" />
                                </svg>
                                <span class="text-sm text-slate-600">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <a href="https://wa.me/{{ $phone }}?text={{ rawurlencode($plan['message']) }}" target="_blank"
                        rel="noopener noreferrer" @class([
                            'w-full inline-flex items-center justify-center gap-2 rounded-xl font-semibold text-sm transition-all duration-300 py-3.5 px-6',
                            'border border-slate-300 text-slate-700 hover:border-brand-500 hover:bg-brand-50 hover:text-brand-700' => !$plan['featured'],
                            'text-white bg-linear-to-r from-brand-600 to-accent-600 hover:from-brand-700 shadow-lg shadow-brand-600/25 hover:-translate-y-0.5' => $plan['featured'],
                        ])>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                        </svg>
                        {{ $plan['price'] === 'Sob consulta' ? 'Solicitar orçamento' : 'Contratar pelo WhatsApp' }}
                    </a>
                </div>
            @endforeach
        </div>

        <p class="text-center text-sm text-slate-400 mt-10">
            💡 Precisa de algo diferente? <a href="https://wa.me/{{ $phone }}?text={{ rawurlencode('Olá! Gostaria de conversar sobre um projeto personalizado.') }}"
                target="_blank" rel="noopener noreferrer" class="font-semibold text-brand-600 hover:underline">Fale com um especialista</a>
            e monte um pacote sob medida.
        </p>
    </div>
</section>
