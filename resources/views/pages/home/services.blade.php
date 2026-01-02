<section class="py-20 px-4 sm:px-6 lg:px-8" id="servicos">

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">
            <h2 class="section-title">
                Nossos Serviços
            </h2>

            <p class="section-description">
                Conheça todos os nossos serviços e o que oferemos de melhor
            </p>
        </div>

        <div class="grid grid-cols-4 gap-y-6 gap-x-4">

            @foreach($services as $service)
                <div
                    class="h-full transition duration-500 hover:-translate-y-2 shadow-2xl shadow-purple-500/20 border rounded-2xl relative flex flex-col gap-3 bg-slate-900/50 backdrop-blur-sm p-8  ">

                    <div class=" text-blue-400 bg-slate-800/50 rounded-xl flex item-center gap-x-2 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-sparkles w-6 h-6">
                            <path
                                d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                            </path>
                            <path d="M20 3v4"></path>
                            <path d="M22 5h-4"></path>
                            <path d="M4 17v2"></path>
                            <path d="M5 18H3"></path>
                        </svg>

                        <h3 class="text-lg font-bold text-white">
                            {{  $service->name }}
                        </h3>
                    </div>

                    <div>
                        <p class="text-sm text-gray-300">
                            {{  $service->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-12">
            <x-button-cta url="https://wa.me/5511998043538?text=Quero meu site. Quero falar com um especialista?" />
        </div>
    </div>
</section>