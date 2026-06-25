@php
    $parts = preg_split('/\s+/', trim($testimonial->name));
    $initials = mb_strtoupper(mb_substr($parts[0] ?? '', 0, 1) . (count($parts) > 1 ? mb_substr(end($parts), 0, 1) : ''));
    $gradients = [
        'from-brand-500 to-accent-600',
        'from-violet-500 to-fuchsia-600',
        'from-sky-500 to-brand-600',
        'from-emerald-500 to-teal-600',
        'from-amber-500 to-orange-600',
        'from-rose-500 to-pink-600',
    ];
    $gradient = $gradients[crc32($testimonial->name) % count($gradients)];
@endphp

<div class="testimonial-item">

    <div class="testimonial-item-wrapper flex flex-col">

        <div class="flex items-center gap-4 mb-4">
            <span class="flex items-center justify-center w-14 h-14 rounded-full bg-linear-to-br {{ $gradient }} text-white font-bold text-lg shadow-md flex-shrink-0">
                {{ $initials }}
            </span>

            <div>
                <h3 class="testimonial-item-title">
                    {{ $testimonial->name }}
                </h3>

                <p class="testimonial-item-office">
                    {{ $testimonial->office }}
                </p>
            </div>
        </div>

        <div class="flex items-center gap-1 mb-4">
            @for($i = 0; $i < 5; $i++)
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="w-4 h-4 fill-amber-400 text-amber-400">
                    <path
                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                    </path>
                </svg>
            @endfor
        </div>

        <div class="relative mb-4 flex-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="absolute -top-2 -left-2 w-8 h-8 text-brand-200">
                <path
                    d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                </path>
                <path
                    d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                </path>
            </svg>

            <p class="testimonial-item-description">
                {{ $testimonial->description }}
            </p>
        </div>

        <div class="border-t border-slate-100 pt-4">
            <span class="testimonial-item-plan">
                {{ $testimonial->plan }}
            </span>
        </div>
    </div>
</div>
