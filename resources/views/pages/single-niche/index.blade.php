<x-layout.base>
    <x-menu :menu="$menu" />

    <!-- hero -->
    <x-hero tag="Soluções digitais para o Reino" titleFirst="Leve Sua Igreja para o" titleSecond="Mundo Digital"
        description="A Single Temas oferece tudo que sua congregação precisa: site moderno, gestão de membros, agenda de eventos e pedidos de oração. Conecte-se com seus fiéis onde eles estiverem."
        buttonText="Conhecer os planos" buttonLink="#planos" />
    <!-- end hero -->

    <!-- plans -->
    @include('pages.single-niche.plans', ['plans' => $plans])
    <!-- end plans -->

    <!-- resources -->
    @include('pages.single-niche.resources', ['resources' => $resources])
    <!-- end resources -->

    <!-- details -->
    @include('pages.single-niche.details', ['plans' => $plans])
    <!-- end details -->

    <!-- testimonials -->
    <x-testimonials :testimonials="$testimonials" />
    <!-- end testimonials -->
</x-layout.base>