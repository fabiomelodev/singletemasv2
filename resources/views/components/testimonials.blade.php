<section class="testimonials" id="testemunhos">

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

        <!-- desktop -->
        <div class="hidden lg:flex flex-wrap gap-y-6 justify-center">

            @foreach($testimonials as $testimonial)
                <x-testimonial-item :testimonial="$testimonial" />
            @endforeach
        </div>
        <!-- end desktop -->

        <!-- mobile -->
        <div class="lg:hidden">

            <div class="swiper js-swiper-testimonials">

                <div class="swiper-wrapper h-[unset!important]">

                    <!-- slide -->
                    @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <x-testimonial-item :testimonial="$testimonial" />
                        </div>
                    @endforeach
                    <!-- end slide -->
                </div>
            </div>

            <div class="relative mt-8">
                <div class="swiper-pagination js-swiper-pagination-testimonials"></div>
            </div>
        </div>
        <!-- end mobile -->
    </div>
</section>
