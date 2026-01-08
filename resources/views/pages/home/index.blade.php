<x-layout.base>
    <x-menu :menu="$menu" />

    <!-- hero -->
    <x-hero tag="{{  $settings->banner_tag }}" titleFirst="{{ $settings->banner_title_first }}" titleSecond="{{ $settings->banner_title_second }}"
        description="{{ $settings->banner_description }}"
        buttonText="Conhecer os planos" buttonLink="#" />
    <!-- end hero -->

    <!-- services -->
    @include('pages.home.services', ['settings' => $settings])
    <!-- end services -->

    <!-- cases -->
    @include('pages.home.cases', ['projects' => $projects])
    <!-- end cases -->

    <!-- how works -->
    @include('pages.home.how-works', ['settings' => $settings])
    <!-- end how works -->

    <!-- develop website -->
    <x-product :product="$productDevelopWebiste" />
    <!-- end develop website -->

    <!-- process -->
    <x-processes />
    <!-- end process -->

    <!-- template -->
    <x-product :product="$productTemplate" />
    <!-- end template -->

    <!-- niches -->
    @include('pages.home.niches', ['niches' => $niches])
    <!-- end niches -->

    <!-- testimonials -->
    <x-testimonials :testimonials="$testimonials" />
    <!-- end testimonials -->
</x-layout.base>
