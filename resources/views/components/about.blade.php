@php
    $benefits = [
        ['title' => 'Design exclusivo', 'text' => 'Layout sob medida para a identidade do seu negócio — nada de modelos genéricos.'],
        ['title' => 'Performance e SEO', 'text' => 'Sites rápidos, otimizados para o Google e prontos para converter visitantes.'],
        ['title' => 'Suporte humano', 'text' => 'Atendimento direto por WhatsApp em horário comercial, sem robôs.'],
        ['title' => 'Manutenção contínua', 'text' => 'Seu site sempre atualizado, seguro e no ar com nossos planos mensais.'],
    ];
@endphp

<section class="section bg-white" id="sobre">
    <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- imagens -->
        <div class="relative order-last lg:order-first">
            <div class="rounded-3xl overflow-hidden shadow-xl ring-1 ring-slate-200 bg-linear-to-br from-brand-100 to-violet-100 aspect-[4/3]">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1000&q=80"
                    alt="Equipe Single Temas trabalhando" class="w-full h-full object-cover" loading="lazy"
                    onerror="this.style.display='none'">
            </div>
            <div class="hidden sm:block absolute -bottom-8 -right-6 w-44 rounded-2xl overflow-hidden shadow-2xl ring-4 ring-white bg-slate-100 aspect-square">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=500&q=80"
                    alt="Código e desenvolvimento" class="w-full h-full object-cover" loading="lazy"
                    onerror="this.style.display='none'">
            </div>
            <div class="absolute -top-6 -left-6 -z-10 w-40 h-40 rounded-3xl bg-brand-200/50 blur-2xl"></div>
        </div>

        <!-- texto -->
        <div>
            <span class="eyebrow mb-5">Por que a Single Temas</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-5">
                Tecnologia e cuidado para a sua presença digital
            </h2>
            <p class="text-lg text-slate-500 mb-8 leading-relaxed">
                Unimos design moderno, código de qualidade e atendimento próximo para colocar o seu negócio ou igreja
                na internet com profissionalismo — do primeiro rascunho à manutenção do dia a dia.
            </p>

            <div class="grid sm:grid-cols-2 gap-6">
                @foreach($benefits as $benefit)
                    <div class="flex gap-4">
                        <span class="flex-shrink-0 flex items-center justify-center w-10 h-10 rounded-xl bg-brand-50 text-brand-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                        </span>
                        <div>
                            <h3 class="font-bold text-slate-900 mb-1">{{ $benefit['title'] }}</h3>
                            <p class="text-sm text-slate-500 leading-relaxed">{{ $benefit['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
