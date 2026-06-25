<x-layout.base>
    <x-menu :menu="$menu" />

    <!-- hero -->
    <x-hero cover="{{ $settings->banner_image }}" tag="{{ $settings->banner_tag }}"
        titleFirst="{{ $settings->banner_title_first }}" titleSecond="{{ $settings->banner_title_second }}"
        description="{{ $settings->banner_description }}" buttonText="Ver Valores e Planos" buttonLink="#valores" />
    <!-- end hero -->

    <!-- stats -->
    <x-stats />
    <!-- end stats -->

    <!-- sobre / diferenciais -->
    <x-about />
    <!-- end sobre -->

    <!-- services -->
    @include('pages.home.services', ['settings' => $settings])
    <!-- end services -->

    <!-- cases -->
    <x-cases :projects="$projects" />
    <!-- end cases -->

    <!-- valores -->
    <x-pricing />
    <!-- end valores -->

    <!-- develop website (o que entregamos) -->
    <x-product :product="$productDevelopWebiste" />
    <!-- end develop website -->

    <!-- process -->
    <x-processes />
    <!-- end process -->

    <!-- planos de continuidade -->
    <x-continuity-plans />
    <!-- end planos de continuidade -->

    <!-- testimonials -->
    <x-testimonials :testimonials="$testimonials" />
    <!-- end testimonials -->

    <!-- cta final -->
    <x-cta-band />
    <!-- end cta -->
</x-layout.base>
