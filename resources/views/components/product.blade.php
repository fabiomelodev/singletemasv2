@if($product)
    <section class="py-20 px-4 sm:px-6 lg:px-8" id="site">

        <div class="max-w-7xl mx-auto">

            <div class="mb-16">
                <h2 class="section-title">
                    {{ $product->section_title }}
                </h2>

                <p class="section-description">
                    {{  $product->description }}
                </p>
            </div>

            <div
                class="border border-purple-500/20 rounded-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-2 gap-6 bg-slate-900/50 backdrop-blur-sm p-6 lg:p-10">

                <div class="pt-6">

                    <h3 class="lg:text-xl font-semibold text-white">
                        {{  $product->phrase }}

                        <span class="block text-6xl lg:text-7xl font-black text-white">
                            {{  $product->price }}
                        </span>
                    </h3>

                    <div class="mt-6">
                        <p class="font-medium text-white">
                            Modelos de sites:
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-4 mt-2">

                        @foreach($product->modules as $module)
                            <div
                                class="transition hover:scale-110 border border-purple-500/30 rounded-full inline-flex items-center gap-2 bg-purple-600/20 hover:bg-purple-600/60 backdrop-blur-sm py-2 px-4">

                                <span class="text-sm text-purple-300">
                                    {{  $module['name'] }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mt-6">
                    <p class="text-sm font-semibold text-gray-400 mb-3">
                        Principais Recursos:
                    </p>

                    <ul class="space-y-2">
                        @foreach($product->resources as $resource)
                            <li class="flex items-start gap-2">
                                <span class="plan-detail-item-list-item-pointer text-purple-400">•</span>
                                <span class="text-gray-300">
                                    {{  $resource['name'] }}
                                </span>
                            </li>
                        @endforeach
                    </ul>

                    <div class="lg:flex mt-12">
                        <x-button-cta
                            url="{{ $product->button_link }}?text={{ $product->button_text }}" />
                    </div>
                </div>
            </div>

        </div>
    </section>
@endif