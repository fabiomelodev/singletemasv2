<div>
    <!-- faq -->
    <x-faq />
    <!-- end faq -->

    <footer class="bg-slate-50 border-t border-slate-200 pt-16 pb-8 px-4 sm:px-6 lg:px-8">

        <div class="max-w-7xl mx-auto">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

                <div class="lg:col-span-1">
                    <a href="{{ route('home.index') }}"
                        class="flex items-center gap-2 font-extrabold text-2xl text-slate-900 tracking-tight mb-4">
                        <span class="flex items-center justify-center w-9 h-9 rounded-xl bg-linear-to-br from-brand-600 to-accent-600 text-white shadow-lg shadow-brand-600/30">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="16 18 22 12 16 6" />
                                <polyline points="8 6 2 12 8 18" />
                            </svg>
                        </span>
                        Single<span class="text-brand-600">Temas</span>
                    </a>

                    <p class="leading-relaxed text-slate-500 text-sm">
                        Transformamos ideias em realidade digital. Soluções completas para estabelecer e crescer sua
                        presença online.
                    </p>

                    <div class="flex items-center gap-2 mt-5">
                        <a href="https://instagram.com/singletemas" target="_blank" rel="noopener noreferrer"
                            class="flex items-center justify-center w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-500 hover:text-pink-500 hover:border-pink-200 transition-colors"
                            aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                            </svg>
                        </a>
                        <a href="https://wa.me/5511998043538" target="_blank" rel="noopener noreferrer"
                            class="flex items-center justify-center w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-500 hover:text-green-500 hover:border-green-200 transition-colors"
                            aria-label="WhatsApp">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-base font-bold text-slate-900 mb-4">Navegação</h3>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="#servicos" class="text-slate-500 hover:text-brand-600 transition-colors">Serviços</a></li>
                        <li><a href="#cases" class="text-slate-500 hover:text-brand-600 transition-colors">Cases</a></li>
                        <li><a href="#valores" class="text-slate-500 hover:text-brand-600 transition-colors">Valores</a></li>
                        <li><a href="#planos" class="text-slate-500 hover:text-brand-600 transition-colors">Áreas de atuação</a></li>
                        <li><a href="#faq" class="text-slate-500 hover:text-brand-600 transition-colors">Perguntas frequentes</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-base font-bold text-slate-900 mb-4">Links Úteis</h3>
                    <ul class="space-y-2.5 text-sm">
                        @foreach($pages as $page)
                            <li>
                                <a href="{{ route('page.show', $page) }}"
                                    class="text-slate-500 hover:text-brand-600 transition-colors">
                                    {{ $page->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="text-base font-bold text-slate-900 mb-4">Contato</h3>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-center gap-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-4 h-4 text-brand-600 flex-shrink-0">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                            <span class="text-slate-500">contato@singletemas.com.br</span>
                        </li>

                        <li>
                            <a class="flex items-center gap-2.5 text-slate-500 hover:text-brand-600 transition-colors"
                                href="https://wa.me/5511998043538" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="w-4 h-4 text-brand-600 flex-shrink-0">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                                <span>(11) 99804-3538</span>
                            </a>
                        </li>

                        <li class="flex items-center gap-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-4 h-4 text-brand-600 flex-shrink-0">
                                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                            <span class="text-slate-500">São Paulo, SP</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-200 pt-6 flex flex-col sm:flex-row items-center justify-between gap-3">
                <p class="text-sm text-slate-400">
                    © {{ date('Y') }} Single Temas. Todos os direitos reservados.
                </p>
                <p class="text-sm text-slate-400">
                    Feito com <span class="text-rose-500">♥</span> para o seu negócio crescer.
                </p>
            </div>
        </div>
    </footer>
</div>
