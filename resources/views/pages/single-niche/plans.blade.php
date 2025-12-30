<section class="plans" id="planos">

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">

            <h2 class="section-title">
                Planos para seu Ministério
            </h2>

            <p class="section-description">
                Ferramentas modernas para evangelização e gestão
                eclesiástica. Escolha o melhor para sua comunidade.
            </p>
        </div>

        <div class="plans-wrapper">
            <!-- loop -->
            @foreach($plans as $plan)
                <x-card-plan-item :plan="$plan" />
            @endforeach
            <!-- end loop -->
        </div>
    </div>
</section>