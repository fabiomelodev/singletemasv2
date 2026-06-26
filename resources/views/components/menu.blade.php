@php
    $whatsapp = app(\App\Settings\GeneralSettings::class)->whatsapp_number;

    // Garante o item "Valores" no menu, posicionado logo após "Cases".
    $navItems = collect($menu->items ?? []);
    if (!$navItems->contains(fn ($i) => ($i['link'] ?? '') === '#valores')) {
        $pos = $navItems->search(fn ($i) => ($i['link'] ?? '') === '#cases');
        $valores = ['name' => 'Valores', 'link' => '#valores'];
        $navItems = ($pos !== false
            ? $navItems->slice(0, $pos + 1)->push($valores)->concat($navItems->slice($pos + 1))
            : $navItems->push($valores))->values();
    }

    // Oculta o item "Testemunhos" do menu se a seção estiver desativada.
    if (! (app(\App\Settings\PageHomeSettings::class)->show_testimonials ?? true)) {
        $navItems = $navItems->reject(fn ($i) => ($i['link'] ?? '') === '#testemunhos')->values();
    }
@endphp

<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
    x-data="{ scrolled: false, menuMobile: false }" x-init="
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 30
        })
    "
    :class="scrolled ? 'backdrop-blur-md bg-white/90 py-3 shadow-md shadow-slate-200/60 border-b border-slate-100' : 'bg-white/70 backdrop-blur-sm py-4 border-b border-transparent'">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between">
            <a href="{{ route('home.index') }}"
                class="flex items-center gap-2 font-extrabold text-2xl text-slate-900 tracking-tight">
                <span
                    class="flex items-center justify-center w-9 h-9 rounded-xl bg-linear-to-br from-brand-600 to-accent-600 text-white shadow-lg shadow-brand-600/30">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="16 18 22 12 16 6" />
                        <polyline points="8 6 2 12 8 18" />
                    </svg>
                </span>
                Single<span class="text-brand-600">Temas</span>
            </a>

            <div class="hidden md:flex items-center gap-7">
                @foreach($navItems as $item)
                    <a class="text-sm font-medium text-slate-600 hover:text-brand-600 transition-colors"
                        href="{{ $item['link'] }}">
                        {{ $item['name'] }}
                    </a>
                @endforeach
            </div>

            <!-- mobile overlay -->
            <div class="w-full h-screen inset-0 fixed flex justify-end bg-slate-900/40 backdrop-blur-sm z-50"
                x-show="menuMobile" x-cloak x-transition:enter="transition duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" x-on:click.self="menuMobile = false">

                <div class="w-10/12 max-w-xs h-full flex flex-col justify-between bg-white p-8 shadow-2xl"
                    x-show="menuMobile" x-transition:enter="transition duration-300"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition duration-300" x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full">

                    <div>
                        <div class="flex items-center justify-between mb-8">
                            <span class="font-extrabold text-xl text-slate-900">Single<span
                                    class="text-brand-600">Temas</span></span>
                            <button class="text-slate-400 hover:text-slate-700" x-on:click="menuMobile = false"
                                aria-label="Fechar menu">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M18 6 6 18" />
                                    <path d="m6 6 12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="flex flex-col gap-y-2">
                            @foreach($navItems as $item)
                                <a class="text-lg font-semibold text-slate-700 hover:text-brand-600 transition-colors py-2"
                                    href="{{ $item['link'] }}" x-on:click="menuMobile = false">
                                    {{ $item['name'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <a href="https://wa.me/{{ $whatsapp }}?text=Ol%C3%A1!%20Vim%20pelo%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es."
                            target="_blank" rel="noopener noreferrer" class="btn-whatsapp w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                            </svg>
                            Fale no WhatsApp
                        </a>

                        <div class="flex items-center gap-3 mt-6">
                            <a href="https://instagram.com/singletemas" target="_blank" rel="noopener noreferrer"
                                class="p-2 text-slate-400 hover:text-pink-500 transition-colors" aria-label="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="w-6 h-6">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end mobile -->

            <div class="hidden md:flex items-center gap-3">
                <a href="https://instagram.com/singletemas" target="_blank" rel="noopener noreferrer"
                    class="p-2 text-slate-400 hover:text-pink-500 transition-colors" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-5 h-5">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                    </svg>
                </a>

                <a href="https://wa.me/{{ $whatsapp }}?text=Ol%C3%A1!%20Vim%20pelo%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold shadow-lg shadow-brand-600/25 transition-all duration-300 hover:-translate-y-0.5 py-2.5 px-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                    </svg>
                    Fale conosco
                </a>
            </div>

            <div class="md:hidden">
                <button
                    class="inline-flex items-center justify-center rounded-xl h-10 w-10 text-slate-700 hover:bg-slate-100 transition-colors"
                    x-on:click="menuMobile = true" aria-label="Abrir menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-6 h-6">
                        <line x1="4" x2="20" y1="12" y2="12" />
                        <line x1="4" x2="20" y1="6" y2="6" />
                        <line x1="4" x2="20" y1="18" y2="18" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
