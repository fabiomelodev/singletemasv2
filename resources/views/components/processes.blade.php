<section class="bg-slate-950/50 py-20 px-4 sm:px-6 lg:px-8" id="processos">

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">
            <h2 class="section-title">
                Nossos Processos
            </h2>

            <p class="section-description">
                Trabalhamos com um processo simples, organizado e transparente para garantir qualidade, prazo e clareza
                em cada etapa
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-10 gap-x-2">

            @foreach($processes as $process)
                <div class="flex flex-col items-center">

                    <div
                        class="w-14 h-14 hover:shadow-xl hover:shadow-purple-500/10 border border-purple-500/20 rounded-xl flex justify-center items-center bg-slate-800/50 p-3">
                        <p class="font-black text-purple-500">
                            {{ $process->order }}
                        </p>
                    </div>

                    <div class="mt-2">
                        <h4 class="text-lg font-bold text-center text-white">
                            {{  $process->name }}
                        </h4>

                        <p class="text-xs text-center text-white">
                            {{  $process->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
