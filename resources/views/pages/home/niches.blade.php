<section class="py-20 px-4 sm:px-6 lg:px-8" id="planos">

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">
            <h2 class="section-title">
                Planos Mensais Contínuos
            </h2>

            <p class="section-description">
                Após o desenvolvimento do seu site, o plano mensal garante sua continuidade e cuidados técnicos.
            </p>
        </div>

        <div class="flex justify-center gap-x-6">

            @foreach($niches as $niche)
                <x-card-niche-item :niche="$niche" />
            @endforeach
        </div>
    </div>
</section>