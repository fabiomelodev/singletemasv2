@props([
    'cover' => null,
    'tag' => null,
    'titleFirst',
    'titleSecond',
    'description',
    'buttonText',
    'buttonLink'
])

@php
    if(!empty($cover)) {
       $cover = Storage::url($cover);
    } else {
        $cover = 'https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1000&q=80';
    }
@endphp

<section class="relative overflow-hidden bg-linear-to-b from-brand-50 via-white to-white pt-28 lg:pt-36 pb-16 lg:pb-24 px-4 sm:px-6 lg:px-8">

    <!-- textura e brilhos -->
    <div class="absolute inset-0 bg-dots opacity-70"></div>
    <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-brand-300/30 blur-3xl"></div>
    <div class="absolute top-40 -left-24 w-80 h-80 rounded-full bg-accent-500/20 blur-3xl"></div>

    <div class="max-w-7xl relative mx-auto grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- coluna texto -->
        <div class="text-center lg:text-left">
            @if($tag)
                <div class="flex justify-center lg:justify-start mb-6">
                    <span class="eyebrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-4 h-4">
                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z" />
                        </svg>
                        {{ $tag }}
                    </span>
                </div>
            @endif

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.1] mb-6">
                {{ $titleFirst }}
                <span class="block bg-linear-to-r from-brand-600 to-accent-600 bg-clip-text text-transparent mt-2">
                    {{ $titleSecond }}
                </span>
            </h1>

            <div class="max-w-xl text-lg text-slate-500 mx-auto lg:mx-0 mb-8 leading-relaxed">
                {!! $description !!}
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <a href="#valores" class="btn-primary">
                    {{ $buttonText ?? 'Ver Valores e Planos' }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </a>

                <a href="https://wa.me/5511998043538?text=Ol%C3%A1!%20Quero%20um%20or%C3%A7amento%20para%20o%20meu%20site."
                    target="_blank" rel="noopener noreferrer" class="btn-whatsapp">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                    </svg>
                    Pedir orçamento
                </a>
            </div>

            <!-- prova social -->
            <div class="flex items-center gap-4 justify-center lg:justify-start mt-10">
                <div class="flex items-center gap-1">
                    @for($i = 0; $i < 5; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            class="w-5 h-5 fill-amber-400 text-amber-400" stroke="currentColor" stroke-width="2">
                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                        </svg>
                    @endfor
                </div>
                <p class="text-sm text-slate-500"><span class="font-bold text-slate-900">+30 projetos</span> entregues
                    com qualidade</p>
            </div>
        </div>

        <!-- coluna imagem -->
        <div class="relative">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl shadow-brand-600/20 ring-1 ring-slate-200 bg-linear-to-br from-brand-600 to-accent-600 aspect-[4/3]">
                <img src="{{ $cover }}" alt="Desenvolvimento de sites e sistemas"
                    class="w-full h-full object-cover" loading="eager"
                    onerror="this.style.display='none'">
            </div>

            <!-- card flutuante -->
            <div class="hidden sm:flex absolute -bottom-6 -left-6 items-center gap-3 rounded-2xl bg-white shadow-xl ring-1 ring-slate-100 p-4">
                <span class="flex items-center justify-center w-11 h-11 rounded-xl bg-green-50 text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 6 9 17l-5-5" />
                    </svg>
                </span>
                <div>
                    <p class="text-sm font-bold text-slate-900 leading-tight">Site no ar em 20–30 dias</p>
                    <p class="text-xs text-slate-400">Suporte e manutenção inclusos</p>
                </div>
            </div>

            <!-- card flutuante topo -->
            <div class="hidden sm:flex absolute -top-5 -right-4 items-center gap-2 rounded-2xl bg-white shadow-xl ring-1 ring-slate-100 py-3 px-4">
                <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-brand-50 text-brand-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="20" height="14" x="2" y="3" rx="2" />
                        <line x1="8" x2="16" y1="21" y2="21" />
                        <line x1="12" x2="12" y1="17" y2="21" />
                    </svg>
                </span>
                <p class="text-xs font-semibold text-slate-700">100% responsivo</p>
            </div>
        </div>
    </div>
</section>
