<section class="faq" id="faq">

    <div class="max-w-4xl mx-auto">

        <div class="mb-16">

            <div class="flex justify-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-circle-help w-8 h-8 text-purple-400">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                    <path d="M12 17h.01"></path>
                </svg>
            </div>

            <h2 class="section-title">
                Perguntas Frequentes
            </h2>

            <p class="section-description">
                Dúvidas sobre como a Single Temas pode ajudar seu ministério
            </p>
        </div>

        <div class="space-y-4" x-data="{ faqCurrent: {{  $faqs[0]->id }} }">

            @foreach($faqs as $faq)
                <div
                    class="transition-colors  border border-purple-500/20 rounded-xl overflow-hidden backdrop-blur-sm hover:border-purple-500/40  bg-slate-900/50 cursor-pointer">

                    <button
                        class="w-full px-6 py-5 flex items-center justify-between text-left hover:bg-slate-800/30 transition-colors"
                        x-on:click="faqCurrent = {{  $faq->id }}">
                        <span class="text-white font-semibold pr-4">
                            {{  $faq->name }}
                        </span>

                        <div style="transform: none;"
                            x-bind:class="faqCurrent == {{ $faq->id }} ? 'rotate-180' : 'rotate-0'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down w-5 h-5 text-purple-400 flex-shrink-0">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </div>
                    </button>

                    <div style="height: auto; opacity: 1;" x-show="faqCurrent == {{  $faq->id }} ? true : false" x-cloak
                        x-transition:enter="transition duration-500" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100">
                        <div class="px-6 pb-5 text-gray-300 leading-relaxed border-t border-slate-800">
                            <p class="pt-4">
                                {{  $faq->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>