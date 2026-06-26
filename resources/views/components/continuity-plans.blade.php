@props(['settings' => null])

@php
    $settings = $settings ?? app(\App\Settings\PageHomeSettings::class);
    $phone = '5511998043538';
    $plans = $settings->continuity_plans ?? [];

    // Aviso do domínio: escapa o texto e transforma "Registro.BR" em link.
    $noticeHtml = str_replace(
        'Registro.BR',
        '<a href="https://registro.br" target="_blank" rel="noopener noreferrer" class="font-semibold text-brand-600 hover:underline">Registro.BR</a>',
        e($settings->continuity_notice_text ?? '')
    );
@endphp

<section class="section bg-white" id="planos">

    <div class="max-w-7xl mx-auto">

        <div class="mb-14 text-center">
            <span class="eyebrow mb-4">Planos mensais</span>
            <h2 class="section-title">{{ $settings->continuity_section_title }}</h2>
            <p class="section-description">
                {{ $settings->continuity_section_description }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto items-stretch">
            @foreach($plans as $plan)
                @php
                    $featured = (bool) ($plan['featured'] ?? false);
                    $message = 'Olá! Tenho interesse no ' . ($plan['name'] ?? '') . ' de continuidade ('
                        . ($plan['price'] ?? '') . ($plan['period'] ?? '') . '). Como prosseguir?';
                @endphp

                <div @class([
                    'relative flex flex-col rounded-3xl p-8 transition-all duration-300',
                    'bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1' => !$featured,
                    'bg-white border-2 border-brand-500 ring-4 ring-brand-500/10 shadow-2xl shadow-brand-600/15 md:-translate-y-3' => $featured,
                ])>

                    @if($featured)
                        <span class="absolute -top-4 left-1/2 -translate-x-1/2 rounded-full bg-linear-to-r from-brand-600 to-accent-600 text-white text-xs font-bold uppercase tracking-wide shadow-lg shadow-brand-600/30 py-1.5 px-4">
                            ⭐ Recomendado
                        </span>
                    @endif

                    <div class="flex items-center gap-3 mb-5">
                        <span @class([
                            'flex items-center justify-center w-12 h-12 rounded-2xl',
                            'bg-brand-50 text-brand-600' => !$featured,
                            'bg-linear-to-br from-brand-600 to-accent-600 text-white shadow-lg shadow-brand-600/30' => $featured,
                        ])>
                            @if($featured)
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/>
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/>
                                    <path d="m9 12 2 2 4-4"/>
                                </svg>
                            @endif
                        </span>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900">{{ $plan['name'] ?? '' }}</h3>
                            <p class="text-sm text-slate-400">{{ $plan['tagline'] ?? '' }}</p>
                        </div>
                    </div>

                    <div class="mb-6 pb-6 border-b border-slate-100">
                        <div class="flex items-end gap-1">
                            <span class="text-4xl sm:text-5xl font-extrabold text-slate-900">{{ $plan['price'] ?? '' }}</span>
                            @if(!empty($plan['period']))
                                <span class="text-slate-400 mb-1.5 ml-1">{{ $plan['period'] }}</span>
                            @endif
                        </div>
                    </div>

                    <ul class="space-y-3 mb-8 flex-1">
                        @foreach(($plan['features'] ?? []) as $feature)
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"
                                    class="w-5 h-5 text-brand-600 flex-shrink-0 mt-0.5">
                                    <path d="M20 6 9 17l-5-5" />
                                </svg>
                                <span class="text-sm text-slate-600">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <a href="https://wa.me/{{ $phone }}?text={{ rawurlencode($message) }}" target="_blank"
                        rel="noopener noreferrer" @class([
                            'w-full inline-flex items-center justify-center gap-2 rounded-xl font-semibold text-sm transition-all duration-300 py-3.5 px-6',
                            'border border-slate-300 text-slate-700 hover:border-brand-500 hover:bg-brand-50 hover:text-brand-700' => !$featured,
                            'text-white bg-linear-to-r from-brand-600 to-accent-600 hover:from-brand-700 shadow-lg shadow-brand-600/25 hover:-translate-y-0.5' => $featured,
                        ])>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                        </svg>
                        Assinar pelo WhatsApp
                    </a>
                </div>
            @endforeach
        </div>

        <!-- aviso: domínio não incluso -->
        <div class="max-w-4xl mx-auto mt-8">
            <div class="flex items-start gap-4 rounded-2xl border border-amber-200 bg-amber-50 p-5 sm:p-6">
                <span class="flex-shrink-0 flex items-center justify-center w-11 h-11 rounded-xl bg-amber-100 text-amber-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3z" />
                        <line x1="12" x2="12" y1="9" y2="13" />
                        <line x1="12" x2="12.01" y1="17" y2="17" />
                    </svg>
                </span>
                <div>
                    <h4 class="font-bold text-slate-900 mb-1">{{ $settings->continuity_notice_title }}</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">{!! $noticeHtml !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
