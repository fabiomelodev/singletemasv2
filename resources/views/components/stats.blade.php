@php
    $stats = [
        ['value' => '+30', 'label' => 'Projetos entregues', 'icon' => 'rocket'],
        ['value' => '20–30', 'label' => 'Dias para publicar', 'icon' => 'clock'],
        ['value' => '3 meses', 'label' => 'Garantia e suporte', 'icon' => 'shield'],
        ['value' => '100%', 'label' => 'Sites responsivos', 'icon' => 'devices'],
    ];
@endphp

<section class="px-4 sm:px-6 lg:px-8 -mt-4 lg:-mt-10 relative z-10">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-px bg-slate-200 rounded-3xl overflow-hidden ring-1 ring-slate-200 shadow-xl shadow-slate-200/50">
            @foreach($stats as $stat)
                <div class="bg-white flex flex-col items-center text-center gap-2 py-8 px-4">
                    <span class="flex items-center justify-center w-12 h-12 rounded-2xl bg-brand-50 text-brand-600 mb-1">
                        @switch($stat['icon'])
                            @case('rocket')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/>
                                    <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/>
                                    <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/>
                                    <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/>
                                </svg>
                                @break
                            @case('clock')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                                </svg>
                                @break
                            @case('shield')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/>
                                    <path d="m9 12 2 2 4-4"/>
                                </svg>
                                @break
                            @default
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/>
                                </svg>
                        @endswitch
                    </span>
                    <p class="text-2xl sm:text-3xl font-extrabold text-slate-900">{{ $stat['value'] }}</p>
                    <p class="text-sm text-slate-500">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
