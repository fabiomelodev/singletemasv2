<section class="plans" id="planos">

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">

            <h2 class="section-title">
                {{ $niche->section_plans_title }}
            </h2>

            <p class="section-description">
                {{ $niche->section_plans_description }}
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
