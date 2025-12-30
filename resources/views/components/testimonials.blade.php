<section class="testimonials" id="depoimentos">

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">
            <h2 class="section-title">
                Testemunhos
            </h2>

            <p class="section-description">
                Veja como a Single Temas tem aumentado visibilidade de empresas e igrejas
                {{-- Veja como a Single Temas tem abençoado igrejas e ministérios pelo Brasil --}}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($testimonials as $testimonial)
                <div class="testimonial-item">

                    <div class="flex items-center gap-4 mb-4">
                        {{-- <img class="w-16 h-16 rounded-full object-cover border-2 border-purple-500/30"
                            alt="Pr. Marcos Silva foto" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2">
                        --}}

                        <div class="w-full flex flex-col items-center">
                            <h3 class="testimonial-item-title">
                                {{  $testimonial->name }}
                            </h3>

                            <p class="testimonial-item-office">
                                {{  $testimonial->office }}
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-center items-center gap-1 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star w-4 h-4 fill-yellow-400 text-yellow-400">
                                <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                </path>
                            </svg>
                        @endfor
                    </div>

                    <div class="relative mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-quote absolute -top-2 -left-2 w-8 h-8 text-purple-500/20">
                            <path
                                d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                            </path>
                            <path
                                d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                            </path>
                        </svg>

                        <p class="testimonial-item-description">
                            {{ $testimonial->description }}
                        </p>
                    </div>

                    <div class="border-t border-slate-800 pt-4">
                        <span class="testimonial-item-plan">
                            {{  $testimonial->plan }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>