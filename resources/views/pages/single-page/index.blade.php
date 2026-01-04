<x-layout.base>
    <x-menu :menu="$menu" />

    <!-- content -->
    <section class="py-20">

        <div class="max-w-7xl mx-auto px-4">

            <div class="shadow rounded-2xl bg-white p-6">

                <span>
                    <h1 class="text-2xl lg:text-3xl font-bold capitalize text-center text-gray-800">
                        {{ $page->name }}
                    </h1>
                </span>

                <span class="page-content block mt-10 lg:mt-20">
                    {!! $page->content !!}
                </span>

                <div class="border-t border-gray-300/50 flex justify-end mt-6 py-2 px-6">

                    <p class="text-sm font-medium text-gray-500">
                        Atualizado em: {{ $page->updated_at->format('d/m/Y') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end content -->
</x-layout.base>
