<div class="plan-item">

    <div class="plan-item-title-wrapper">

        <div class="plan-item-icon-wrapper">
            <x-icons class="plan-item-icon" icon="essencial" />
            <x-icons class="plan-item-icon" icon="completo" />
            <x-icons class="plan-item-icon" icon="premium" />
        </div>

        <h3 class="plan-item-title">
            {{ $niche->plan_title }}
        </h3>
    </div>

    <p class="plan-item-description">
        {{ $niche->description }}
    </p>

    <div class="mb-6">

        <span class="plan-item-price-hint">
            a partir de
        </span>

        <span class="plan-item-price">
            {{ $niche->minimum_price }}
        </span>

        <span class="plan-item-price-monthly">
            /mês
        </span>
    </div>

    <a class="plan-item-cta" href="{{ route('niche.show', $niche) }}">
        Conheça mais
    </a>

    <ul class="space-y-4">

        @foreach($niche->plan_details as $item)
            <li class="plan-item-list-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-check w-5 h-5 text-purple-400 flex-shrink-0 mt-0.5">
                    <path d="M20 6 9 17l-5-5"></path>
                </svg>

                <span class="plan-item-list-item-title">
                    {{ $item['name'] }}
                </span>
            </li>
        @endforeach
    </ul>
</div>