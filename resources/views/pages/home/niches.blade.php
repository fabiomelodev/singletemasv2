<section class="section bg-white" id="planos">

    <div class="max-w-7xl mx-auto">

        <div class="mb-14 text-center">
            <span class="eyebrow mb-4">Para quem trabalhamos</span>
            <h2 class="section-title">
                Conheça Nossas Áreas de Atuação
            </h2>

            <p class="section-description">
                Desenvolvemos o seu site e oferecemos planos mensais que garantem continuidade, suporte e cuidados
                técnicos.
            </p>
        </div>

        <div class="flex flex-col md:flex-row flex-wrap justify-center gap-8">

            @foreach($niches as $niche)
                <div class="w-full md:w-5/12 lg:w-4/12">
                    <x-card-niche-item :niche="$niche" />
                </div>
            @endforeach
        </div>
    </div>
</section>
