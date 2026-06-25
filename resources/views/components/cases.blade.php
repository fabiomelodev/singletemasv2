<section class="section bg-slate-50" id="cases">

    <div class="max-w-7xl mx-auto">

        <div class="mb-14 text-center">
            <span class="eyebrow mb-4">Portfólio</span>
            <h2 class="section-title">
                Nossos Cases
            </h2>

            <p class="section-description">
                Alguns projetos que tivemos o prazer de desenvolver ao longo da nossa trajetória.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @php
                $fallbackImages = [
                    'https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?auto=format&fit=crop&w=700&q=80',
                    'https://images.unsplash.com/photo-1559136555-9303baea8ebd?auto=format&fit=crop&w=700&q=80',
                    'https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=700&q=80',
                    'https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=700&q=80',
                    'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=700&q=80',
                    'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?auto=format&fit=crop&w=700&q=80',
                ];
            @endphp

            @foreach($projects as $project)
                @php
                    $href = $project->link ? 'https://' . ltrim($project->link, 'https://') : '#';
                    $img = $project->thumbnail ? Storage::url($project->thumbnail) : $fallbackImages[$loop->index % count($fallbackImages)];
                @endphp

                <a href="{{ $href }}" target="_blank" rel="noopener noreferrer" class="group case-item">

                    <!-- barra do navegador -->
                    <div class="flex items-center gap-1.5 bg-slate-100 border-b border-slate-200 px-4 py-3">
                        <span class="w-2.5 h-2.5 rounded-full bg-rose-300"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-amber-300"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-300"></span>
                        <span class="ml-3 truncate text-xs text-slate-400">{{ $project->link }}</span>
                    </div>

                    <!-- imagem -->
                    <div class="relative h-48 overflow-hidden bg-linear-to-br from-brand-500 to-accent-600">
                        <img src="{{ $img }}" alt="{{ $project->name }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            loading="lazy" onerror="this.style.display='none'">
                        <div class="absolute inset-0 flex items-end bg-linear-to-t from-slate-900/50 to-transparent p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-white">
                                Visitar site
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
                            </span>
                        </div>
                    </div>

                    <!-- rodapé -->
                    <div class="flex items-center justify-between gap-2 p-5">
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-brand-600 transition-colors">
                            {{ $project->name }}
                        </h3>
                        <span class="flex-shrink-0 flex items-center justify-center w-9 h-9 rounded-lg bg-brand-50 text-brand-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
