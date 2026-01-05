<section class="resources" id="recursos">

    <div class="container mx-auto px-4">

        <div class="mb-16">
            <h2 class="section-title">
                Compare os Recursos
            </h2>

            <p class="section-description">
                {{ $niche->section_resources_description }}
            </p>
        </div>

        <div class="overflow-x-auto">
            <div
                class="min-w-[600px] border border-purple-500/20 rounded-2xl overflow-hidden bg-slate-900/50 backdrop-blur-sm ">

                <table class="w-full">
                    <thead class="bg-slate-900/80">
                        <tr>
                            <th class="text-left text-gray-300 font-semibold p-6">Recursos</th>
                            <th class="text-center text-blue-400 font-semibold p-6">Essencial</th>
                            <th class="text-center text-purple-400 font-semibold bg-purple-900/20 p-6">Completo</th>
                            <th class="text-center text-yellow-400 font-semibold p-6">Premium</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($resources as $resource)
                            <tr class="transition-colors border-t border-slate-800 hover:bg-slate-800/30">
                                <td class="text-gray-300 p-6">
                                    {{  $resource->name }}
                                </td>

                                @foreach($resource->plans as $plan)
                                    <td class="p-6 text-center odd:bg-purple-900/20">
                                        @if($plan['type'] == 'check')
                                            @if($plan['value'] == 'true')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-check w-5 h-5 text-green-400 mx-auto">
                                                    <path d="M20 6 9 17l-5-5"></path>
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-x w-5 h-5 text-gray-600 mx-auto">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg>
                                            @endif
                                        @else
                                            <span class="text-sm text-gray-300">
                                                {{  $plan['value'] }}
                                            </span>
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>