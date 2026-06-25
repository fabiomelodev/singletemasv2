<section class="faq" id="faq">

    <div class="max-w-4xl mx-auto">

        <div class="mb-14 text-center">

            <div class="flex justify-center mb-5">
                <span class="flex items-center justify-center w-14 h-14 rounded-2xl bg-brand-50 text-brand-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-7 h-7">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                        <path d="M12 17h.01"></path>
                    </svg>
                </span>
            </div>

            <h2 class="section-title">
                Perguntas Frequentes
            </h2>

            <p class="section-description">
                Tire suas dúvidas sobre como a Single Temas pode ajudar a sua empresa ou igreja.
            </p>
        </div>

        @if($faqs->isNotEmpty())
            <div class="space-y-4" x-data="{ faqCurrent: {{ $faqs[0]->id }} }">

                @foreach($faqs as $faq)
                    <div class="transition-all border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-sm hover:border-brand-200"
                        :class="faqCurrent == {{ $faq->id }} ? 'ring-1 ring-brand-200 shadow-md' : ''">

                        <button
                            class="w-full px-6 py-5 flex items-center justify-between text-left hover:bg-slate-50 transition-colors cursor-pointer"
                            x-on:click="faqCurrent = (faqCurrent == {{ $faq->id }} ? null : {{ $faq->id }})">
                            <span class="text-slate-900 font-semibold pr-4">
                                {{ $faq->name }}
                            </span>

                            <span class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-lg bg-brand-50 text-brand-600 transition-transform duration-300"
                                x-bind:class="faqCurrent == {{ $faq->id }} ? 'rotate-180' : 'rotate-0'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-5 h-5">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </span>
                        </button>

                        <div x-show="faqCurrent == {{ $faq->id }}" x-cloak
                            x-transition:enter="transition duration-300 ease-out"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0">
                            <div class="px-6 pb-5 text-slate-600 leading-relaxed border-t border-slate-100">
                                <div class="content pt-4">
                                    {!! $faq->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="mt-12 text-center">
            <p class="text-slate-500 mb-4">Ainda tem dúvidas? Fale direto com a gente.</p>
            <a href="https://wa.me/5511998043538?text=Ol%C3%A1!%20Tenho%20uma%20d%C3%BAvida%20sobre%20os%20servi%C3%A7os."
                target="_blank" rel="noopener noreferrer" class="btn-whatsapp">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                </svg>
                Tirar dúvidas no WhatsApp
            </a>
        </div>
    </div>
</section>
