<section class="bg-slate-950/50 py-20 px-4 sm:px-6 lg:px-8" id="processos">

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">
            <h2 class="section-title">
                Nossos Processos
            </h2>

            <p class="section-description">
                Trabalhamos com um processo simples, organizado e transparente para garantir qualidade, prazo e clareza
                em cada etapa
            </p>
        </div>

        <div class="grid grid-cols-4 gap-y-10 gap-x-2">

            @php
                $items = [
                    [
                        'name' => 'Escolha do domínio',
                        'description' => 'Você escolhe o endereço do seu site e cuidamos de todo o registro e configuração.'
                    ],

                    [
                        'name' => 'Envio do briefing',
                        'description' => 'Nos envia informações essenciais para entendermos sua necessidade.'
                    ],

                    [
                        'name' => 'Proposta de layout',
                        'description' => 'Criamos um visual exclusivo para você revisar e aprovar.'
                    ],

                    [
                        'name' => 'Desenvolvimento do site',
                        'description' => 'Transformamos o layout aprovado em um site funcional.'
                    ],

                    [
                        'name' => 'Versão de aprovação',
                        'description' => 'Você revisa e confirma o site antes de publicarmos.'
                    ],

                    [
                        'name' => 'Assinatura do plano mensal',
                        'description' => 'Escolha o plano que garante manutenção, suporte e continuidade ao seu site.'
                    ],

                    [
                        'name' => 'Publicação online',
                        'description' => 'Configuramos tudo para seu site ficar no ar.'
                    ],

                    [
                        'name' => 'Entrega de acessos',
                        'description' => 'Enviamos os dados para você acessar e administrar o site.'
                    ],
                ];
            @endphp

            @foreach($items as $key => $item)
                <div class="flex flex-col items-center">
                    <div
                        class="w-14 h-14 hover:shadow-xl hover:shadow-purple-500/10 border border-purple-500/20 rounded-xl flex justify-center items-center bg-slate-800/50 p-3">
                        <p class="font-black text-purple-500">
                            {{ ++$key }}
                        </p>
                    </div>

                    <div class="mt-2">
                        <h4 class="text-lg font-bold text-center text-white">
                            {{  $item['name'] }}
                        </h4>

                        <p class="text-xs text-center text-white">
                            {{  $item['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>