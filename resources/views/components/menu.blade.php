<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" x-data="{ scrolled: false, menuMobile: false }" x-init="
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 50
        })
    " :class="scrolled ? 'backdrop-blur-md bg-slate-950/80 py-3 shadow-lg' : 'bg-transparent py-6'">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between">
            <a href="{{  route('home.index') }}" class="font-bold text-2xl text-white tracking-tight">
                Single
                <span class="text-purple-400">
                    Temas
                </span>
            </a>

            <div class="hidden md:flex items-center gap-8">
                @foreach($menu->items as $item)
                    <a class="text-sm font-medium text-gray-300 hover:text-purple-400 transition-colors" href="{{  $item['link'] }}" >
                        {{  $item['name'] }}
                    </a>
                @endforeach
            </div>

            <!-- mobile -->
            <div class="w-full h-screen inset-0 fixed flex justify-end bg-black/80 z-50" x-show="menuMobile" x-cloak x-transition:enter="transition duration-300 delay-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition duration-500 delay-800" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

                <div class="w-2/12">

                    <button class="w-full h-20 flex justify-center items-center bg-purple-500" x-on:click="menuMobile = !menuMobile" x-show="menuMobile" x-transition:enter="transition duration-500 delay-800" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition duration-500 delay-500" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">
                        <svg class="w-8 h-8 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z"/></svg>
                    </button>
                </div>

                <div class="w-10/12">

                    <div class="h-full flex flex-col justify-between bg-purple-500 p-10" x-show="menuMobile" x-transition:enter="transition duration-500 delay-800" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition duration-500 delay-500" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">

                        <div class="flex flex-col gap-y-8">
                            @foreach($menu->items as $item)
                                <a class="text-xl font-medium text-gray-300 hover:text-purple-400 transition-colors" href="{{  $item['link'] }}" x-on:click="menuMobile = !menuMobile">
                                    {{  $item['name'] }}
                                </a>
                            @endforeach
                        </div>

                        <div class="flex items-center gap-4">
                            <a href="https://instagram.com/singletemas" target="_blank" rel="noopener noreferrer"
                                class="p-2 text-gray-400 hover:text-pink-500 hover:bg-white/5 rounded-full transition-all"
                                aria-label="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-instagram w-10 h-10">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                </svg>
                            </a>

                            <a href="https://wa.me/5511998043538" target="_blank" rel="noopener noreferrer"
                                class="p-2 text-gray-400 hover:text-green-500 hover:bg-white/5 rounded-full transition-all"
                                aria-label="WhatsApp">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-message-circle w-10 h-10">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end mobile -->

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
                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:text-accent-foreground h-10 w-10 text-white hover:bg-white/10"
                    x-on:click="menuMobile = !menuMobile">
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
