<div>
    <!-- faq -->
    <x-faq />
    <!-- end faq -->

    <footer class="bg-slate-950 border-t border-purple-500/20 py-12 px-4 sm:px-6 lg:px-8">

        <div class="max-w-7xl mx-auto">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">

                <div>
                    <h3 class="text-xl font-bold text-white mb-4">
                        Sobre Nós
                    </h3>

                    <p class="leading-relaxed text-gray-400">
                        Transformamos ideias em realidade digital. Oferecemos soluções
                        completas para estabelecer e crescer sua presença online.
                    </p>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-white mb-4">
                        Links Úteis
                    </h3>

                    <ul class="space-y-2">
                        @foreach($pages as $page)
                            <li>
                                <a href="{{ route('page.show', $page ) }}" class="transition-colors text-gray-400 hover:text-purple-400">
                                    {{ $page->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-white mb-4">
                        Contato
                    </h3>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-mail w-4 h-4 text-purple-400">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>

                            <span class="text-gray-400">
                                contato@singletemas.com.br
                            </span>
                        </li>

                        <li>
                            <a class="flex items-center gap-2" href="https://wa.me/5511998043538" target="_blank"
                                rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-phone w-4 h-4 text-purple-400">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>

                                <span class="text-gray-400">
                                    (11) 99804-3538
                                </span>
                            </a>
                        </li>

                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-map-pin w-4 h-4 text-purple-400">
                                <path
                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                </path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>

                            <span class="text-gray-400">
                                São Paulo, SP
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-800 pt-8">
                <p class="text-center text-gray-400">
                    © 2025 Todos os direitos reservados.
                </p>
            </div>
        </div>
    </footer>
</div>
