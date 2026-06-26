@php
    $whatsapp = app(\App\Settings\GeneralSettings::class)->whatsapp_number;
@endphp

<section class="section bg-white" id="servicos">

    <div class="max-w-7xl mx-auto">

        <div class="mb-14 text-center">
            <span class="eyebrow mb-4">O que fazemos</span>
            <h2 class="section-title">
                {{ $settings->section_service_title }}
            </h2>

            <p class="section-description">
                {{ $settings->section_service_description }}
            </p>
        </div>

        <!-- desktop -->
        <div class="hidden lg:grid grid-cols-4 gap-6">
            @foreach($settings->services as $index => $service)
                <x-card-service-item :service="$service" :index="$index" />
            @endforeach
        </div>
        <!-- end desktop -->

        <!-- tablet -->
        <div class="hidden sm:grid lg:hidden grid-cols-2 gap-6">
            @foreach($settings->services as $index => $service)
                <x-card-service-item :service="$service" :index="$index" />
            @endforeach
        </div>
        <!-- end tablet -->

        <!-- mobile -->
        <div class="sm:hidden">
            <div class="swiper js-swiper-services">
                <div class="swiper-wrapper h-[unset!important]">
                    @foreach($settings->services as $index => $service)
                        <div class="swiper-slide">
                            <x-card-service-item :service="$service" :index="$index" />
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="relative mt-8">
                <div class="swiper-pagination js-swiper-pagination-services"></div>
            </div>
        </div>
        <!-- end mobile -->

        <div class="flex justify-center mt-12">
            <x-button-cta url="https://wa.me/{{ $whatsapp }}?text=Quero%20falar%20com%20um%20especialista!" />
        </div>
    </div>
</section>
