<x-layout.base>
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" x-data="{ scrolled: false }" x-init="
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 50
        })
    " :class="scrolled ? 'backdrop-blur-md bg-slate-950/80 py-3 shadow-lg' : 'bg-transparent py-6'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <a href="{{  route('home.index') }}" class="flex-shrink-0 font-bold text-2xl text-white tracking-tight">
                    Single
                    <span class="text-purple-400">
                        Temas
                    </span>
                </a>

                <div class="hidden md:flex items-center gap-8">
                    <a href="#servicos"
                        class="text-sm font-medium text-gray-300 hover:text-purple-400 transition-colors">
                        Serviços
                    </a>

                    <a href="#cases" class="text-sm font-medium text-gray-300 hover:text-purple-400 transition-colors">
                        Cases
                    </a>

                    <a href="#desenvolvimento"
                        class="text-sm font-medium text-gray-300 hover:text-purple-400 transition-colors">
                        Desevolvimento
                    </a>

                    <a href="#processos"
                        class="text-sm font-medium text-gray-300 hover:text-purple-400 transition-colors">
                        Processos
                    </a>

                    <a href="#depoimentos"
                        class="text-sm font-medium text-gray-300 hover:text-purple-400 transition-colors">
                        Depoimentos
                    </a>

                    <a href="#faq" class="text-sm font-medium text-gray-300 hover:text-purple-400 transition-colors">
                        FAQ
                    </a>
                </div>

                <div class="hidden md:flex items-center gap-4 border-l border-white/10 pl-6">
                    <a href="https://instagram.com/singletemas" target="_blank" rel="noopener noreferrer"
                        class="p-2 text-gray-400 hover:text-pink-500 hover:bg-white/5 rounded-full transition-all"
                        aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-instagram w-5 h-5">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                        </svg>
                    </a>

                    <a href="https://wa.me/5511998043538" target="_blank" rel="noopener noreferrer"
                        class="p-2 text-gray-400 hover:text-green-500 hover:bg-white/5 rounded-full transition-all"
                        aria-label="WhatsApp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-message-circle w-5 h-5">
                            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                        </svg>
                    </a>
                </div>

                <div class="md:hidden">
                    <button
                        class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:text-accent-foreground h-10 w-10 text-white hover:bg-white/10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-menu w-6 h-6">
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <line x1="4" x2="20" y1="6" y2="6"></line>
                            <line x1="4" x2="20" y1="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- hero -->
    <x-hero tag="Soluções digitais" titleFirst="Leve seu negócio para o" titleSecond="mundo digital"
        description="A Single Temas oferece tudo que sua congregação precisa: site moderno, gestão de membros, agenda de eventos e pedidos de oração. Conecte-se com seus fiéis onde eles estiverem."
        buttonText="Conhecer os planos" buttonLink="#" />
    <!-- end hero -->

    <!-- services -->
    @include('pages.home.services', ['services' => $services])
    <!-- end services -->

    <!-- cases -->
    @include('pages.home.cases', ['projects' => $projects])
    <!-- end cases -->

    <!-- website -->
    @include('pages.home.website')
    <!-- end website -->

    <!-- process -->
    @include('pages.home.process')
    <!-- end process -->

    <!-- niches -->
    @include('pages.home.niches', ['niches' => $niches])
    <!-- end niches -->

    <!-- testimonials -->
    <x-testimonials :testimonials="$testimonials" />
    <!-- end testimonials -->

    <!-- faq -->
    <x-faq :faqs="$faqs" />
    <!-- end faq -->
</x-layout.base>