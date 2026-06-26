@if($product)
    @php
        $whatsapp = app(\App\Settings\GeneralSettings::class)->whatsapp_number;
    @endphp
    <section class="section bg-slate-50" id="site">

        <div class="max-w-7xl mx-auto">

            <div class="mb-14 text-center">
                <span class="eyebrow mb-4">Tudo incluso</span>
                <h2 class="section-title">
                    {{ $product->section_title }}
                </h2>

                <p class="section-description">
                    {{ $product->description }}
                </p>
            </div>

            <div class="rounded-3xl overflow-hidden grid grid-cols-1 lg:grid-cols-2 bg-white border border-slate-200 shadow-sm">

                <!-- imagem -->
                <div class="relative min-h-[260px] bg-linear-to-br from-brand-600 to-accent-600">
                    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?auto=format&fit=crop&w=900&q=80"
                        alt="{{ $product->section_title }}" class="absolute inset-0 w-full h-full object-cover"
                        loading="lazy" onerror="this.style.display='none'">
                    <div class="absolute inset-0 bg-linear-to-t from-brand-900/40 to-transparent"></div>

                    <div class="relative h-full flex flex-col justify-end p-6 lg:p-10">
                        <p class="text-white/80 text-sm font-medium mb-3">Tipos de site que desenvolvemos</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach($product->modules as $module)
                                <span class="inline-flex items-center rounded-full bg-white/15 backdrop-blur-sm border border-white/20 text-white text-sm font-medium py-1.5 px-4">
                                    {{ $module['name'] }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- recursos -->
                <div class="p-6 lg:p-10">
                    <p class="text-sm font-bold uppercase tracking-wide text-brand-600 mb-5">
                        Principais recursos
                    </p>

                    <ul class="grid sm:grid-cols-2 gap-x-6 gap-y-3 mb-8">
                        @foreach($product->resources as $resource)
                            <li class="flex items-start gap-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-5 h-5 text-brand-600 flex-shrink-0 mt-0.5">
                                    <path d="M20 6 9 17l-5-5" />
                                </svg>
                                <span class="text-sm text-slate-600">{{ $resource['name'] }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <x-button-cta url="https://wa.me/{{ $whatsapp }}?text={{ rawurlencode($product->button_text) }}"
                        label="Quero desenvolver meu site" />
                </div>
            </div>
        </div>
    </section>
@endif
