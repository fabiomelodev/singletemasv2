<section class="section bg-white" id="processos">

    <div class="max-w-7xl mx-auto">

        <div class="mb-14 text-center">
            <span class="eyebrow mb-4">Passo a passo</span>
            <h2 class="section-title">
                Nossos Processos
            </h2>

            <p class="section-description">
                Um fluxo simples, organizado e transparente para garantir qualidade, prazo e clareza em cada etapa.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach($processes as $process)
                <div class="group relative h-full rounded-2xl border border-slate-200 bg-white shadow-sm hover:shadow-xl hover:shadow-brand-600/10 hover:-translate-y-1 hover:border-brand-200 transition-all duration-300 p-6">

                    <div class="flex items-center gap-3 mb-4">
                        <span class="flex items-center justify-center w-11 h-11 rounded-xl bg-linear-to-br from-brand-600 to-accent-600 text-white font-extrabold shadow-lg shadow-brand-600/25">
                            {{ str_pad($process->order, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <span class="h-px flex-1 bg-linear-to-r from-brand-200 to-transparent"></span>
                    </div>

                    <h3 class="text-base font-bold text-slate-900 mb-1.5">
                        {{ $process->name }}
                    </h3>

                    <p class="text-sm text-slate-500 leading-relaxed">
                        {{ $process->description }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
