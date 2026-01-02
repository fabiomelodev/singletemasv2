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
                        'description' => 'Definimos o domínio ideal para o site, alinhado ao nome da igreja ou empresa, garantindo uma presença online profissional.'
                    ],

                    [
                        'name' => 'Envio do briefing',
                        'description' => 'Coletamos as informações essenciais para entender a identidade, objetivos e necessidades do projeto.'
                    ],

                    [
                        'name' => 'Criação do layout',
                        'description' => 'Desenvolvemos o layout inicial do site, pensado de forma personalizada e alinhado à identidade visual do cliente.'
                    ],

                    [
                        'name' => 'Desenvolvimento do site',
                        'description' => 'Transformamos o layout aprovado em um site funcional, responsivo, rápido e bem estruturado.'
                    ],

                    [
                        'name' => 'Versão para aprovação',
                        'description' => 'Disponibilizamos o site em um ambiente de testes para validação e ajustes finais antes da publicação.'
                    ],

                    [
                        'name' => 'Plano mensal de continuidade',
                        'description' => 'Após o desenvolvimento, é escolhido o plano mensal que garante manutenção, suporte, ajustes, hospedagem, domínio, e-mails e acesso aos módulos do sistema.'
                    ],

                    [
                        'name' => 'Publicação do site',
                        'description' => 'Configuramos o ambiente final e colocamos o site no ar, pronto para acesso do público.'
                    ],

                    [
                        'name' => 'Entrega de acessos',
                        'description' => 'Entregamos os acessos administrativos e orientações básicas para uso do site.'
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