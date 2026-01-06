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
    @include('pages.home.how-works')
    <!-- end how works -->

    <!-- develop website -->
    @include('pages.home.develop-website')
    <!-- end develop website -->

    <!-- process -->
    @include('pages.home.process')
    <!-- end process -->

    <!-- template -->
    @include('pages.home.template')
    <!-- end template -->

    <!-- niches -->
    @include('pages.home.niches', ['niches' => $niches])
    <!-- end niches -->

    <!-- testimonials -->
    <x-testimonials :testimonials="$testimonials" />
    <!-- end testimonials -->
</x-layout.base>
