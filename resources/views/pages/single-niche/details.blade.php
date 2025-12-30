<section class="py-20 px-4 sm:px-6 lg:px-8" id="detalhes">

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">
            <h2 class="section-title">
                Detalhes dos Planos
            </h2>

            <p class="section-description">
                Entenda como cada opção pode abençoar a gestão e
                comunicação da sua igreja
            </p>
        </div>

        <div class="space-y-8">

            @foreach($plans as $plan)
                <div class="plan-detail-item">

                    <div class="flex items-start gap-6">
                        <div class="plan-detail-item-icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="plan-detail-item-icon">
                                <path
                                    d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                </path>
                                <path
                                    d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                </path>
                                <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="plan-detail-item-icon">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                <polyline points="16 7 22 7 22 13"></polyline>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="plan-detail-item-icon">
                                <path
                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                </path>
                                <circle cx="12" cy="8" r="6"></circle>
                            </svg>
                        </div>

                        <div class="flex-1">
                            <h3 class="plan-detail-item-title">
                                {{  $plan->name }}
                            </h3>

                            <p class="plan-detail-item-description">
                                {{  $plan->description }}
                            </p>

                            <div class="bg-slate-800/30 rounded-xl p-4 mb-4">
                                <p class="text-sm font-semibold text-gray-400 mb-2">
                                    Ideal para:
                                </p>

                                <p class="text-gray-300">
                                    {{  $plan->observation }}
                                </p>
                            </div>

                            <div>
                                <p class="text-sm font-semibold text-gray-400 mb-3">
                                    Principais Recursos:
                                </p>

                                <ul class="space-y-2">
                                    @foreach($plan->resources as $resource)
                                        <li class="flex items-start gap-2">
                                            <span class="plan-detail-item-list-item-pointer">•</span>
                                            <span class="text-gray-300">
                                                {{  $resource['name'] }}
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>