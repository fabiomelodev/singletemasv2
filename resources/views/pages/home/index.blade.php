<x-layout.base>
    <x-menu :menu="$menu" />

    <!-- hero -->
    <x-hero tag="Soluções digitais" titleFirst="Transforme sua Presença Online" titleSecond="com um Site Personalizado"
        description="A Single Temas oferece tudo que o seu negócio precisa: site moderno, gestão de membros, agenda de eventos e pedidos de oração. Conecte-se no digital para continuar crescendo."
        buttonText="Conhecer os planos" buttonLink="#" />
    <!-- end hero -->

    <!-- services -->
    @include('pages.home.services', ['services' => $services])
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
    {{-- @include('pages.home.process') --}}
    <!-- end process -->

    <!-- template -->
    {{-- @include('pages.home.template') --}}
    <!-- end template -->

    <!-- niches -->
    {{-- @include('pages.home.niches', ['niches' => $niches]) --}}
    <!-- end niches -->

    <!-- testimonials -->
    {{-- <x-testimonials :testimonials="$testimonials" /> --}}
    <!-- end testimonials -->
</x-layout.base>
