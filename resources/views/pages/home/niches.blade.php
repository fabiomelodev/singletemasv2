<section class="py-20 px-4 sm:px-6 lg:px-8" id="planos">

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">
            <h2 class="section-title">
                Planos Mensais Contínuos
            </h2>

            <p class="section-description">
                Conheça os nossos melhores planos para você
            </p>
        </div>

        <div class="flex justify-center gap-x-6">

            @foreach($niches as $niche)
                <x-card-niche-item :niche="$niche" />
            @endforeach
        </div>
    </div>
</section>