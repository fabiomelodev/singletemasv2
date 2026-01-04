@props([
    'tag' => null,
    'titleFirst',
    'titleSecond',
    'description',
    'buttonText',
    'buttonLink'
])

<section class="overflow-hidden relative bg-cover bg-no-repeat bg-center py-20 px-4 sm:px-6 lg:px-8"
    style="background-image: url(https://images.unsplash.com/photo-1438232992991-995b7058bbb3)">

    <div class="inset-0 absolute bg-gradient-to-b from-purple-600/80 to-black/50"></div>

    <div class="max-w-7xl relative mx-auto">
        <div class="flex justify-center mb-6">
            <div
                class="border border-purple-500/30 rounded-full inline-flex items-center gap-2  bg-purple-600/20 backdrop-blur-sm py-2 px-4">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-sparkles w-4 h-4 text-purple-400">
                    <path
                        d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                    </path>
                    <path d="M20 3v4"></path>
                    <path d="M22 5h-4"></path>
                    <path d="M4 17v2"></path>
                    <path d="M5 18H3"></path>
                </svg>

                <span class="text-sm text-purple-300">
                    {{  $tag }}
                </span>
            </div>
        </div>

        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-center text-white mb-6">
            {{ $titleFirst }}
            <span class="block text-purple-400 mt-2">
                {{  $titleSecond }}
            </span>
        </h1>

        <span class="max-w-3xl block text-lg sm:text-xl text-center text-gray-300 mx-auto mb-12">
            {!!  $description !!}
        </span>

        <div class="flex justify-center">
            <a class="transition hover:scale-110 border border-purple-500/30 rounded-full inline-flex items-center gap-2 bg-purple-600/20 hover:bg-purple-600/60 backdrop-blur-sm py-2 px-4"
                href="{{ $buttonLink }}">

                <span class="text-sm text-purple-300">
                    {{  $buttonText }}
                </span>
            </a>
        </div>
    </div>
</section>
