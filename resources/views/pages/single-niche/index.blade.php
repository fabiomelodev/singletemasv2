<x-layout.base>
    <x-menu :menu="$menu" />

    <!-- hero -->
    <x-hero tag="{{ $niche->banner_tag }}" titleFirst="{{ $niche->banner_title_first }}"
        titleSecond="{{ $niche->banner_title_second }}" description="{!! $niche->banner_description !!}"
        buttonText="Conhecer os planos" buttonLink="#planos" />
    <!-- end hero -->

    <!-- plans -->
    @include('pages.single-niche.plans', ['niche' => $niche, 'plans' => $plans])
    <!-- end plans -->

    <!-- resources -->
    @include('pages.single-niche.resources', ['niche' => $niche, 'resources' => $resources])
    <!-- end resources -->

    <!-- details -->
    @include('pages.single-niche.details', ['niche' => $niche, 'plans' => $plans])
    <!-- end details -->

    <!-- testimonials -->
    <x-testimonials :testimonials="$testimonials" />
    <!-- end testimonials -->
</x-layout.base>