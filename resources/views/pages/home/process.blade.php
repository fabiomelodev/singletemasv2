<section class="bg-slate-950/50 py-20 px-4 sm:px-6 lg:px-8" id="processos">

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">
            <h2 class="section-title">
                Nossos processos
            </h2>

            <p class="section-description">
                Tenha o seu site conosco com layout único e personalizado
            </p>
        </div>

        <div class="grid grid-cols-4 gap-y-10 gap-x-2">

            @php
                $items = [
                    [
                        'name' => 'Escolha do domínio',
                        'description' => 'Você escolhe o endereço do seu site (domínio) e nós verificamos a disponibilidade e realizamos a configuração.'
                    ],

                    [
                        'name' => 'Desenvolvimento de site',
                        'description' => 'Desenvolveremos o seu site de acordo com requisitos.'
                    ],

                    [
                        'name' => 'Versão para aprovação',
                        'description' => 'Iremos disponibilizar uma versão do site para ser aprovado.'
                    ],

                    [
                        'name' => 'Configuração de ambiente',
                        'description' => 'Configuremos 100% ambiente para acessar o seu site.'
                    ],

                    [
                        'name' => 'Assinatura do plano',
                        'description' => 'Selecione o plano ideal para a sua igreja, de acordo com a necessidade de páginas, recursos e integrações.'
                    ],

                    [
                        'name' => 'Configurações iniciais',
                        'description' => 'Após a confirmação da assinatura, iniciamos a preparação do ambiente e o desenvolvimento do site. O prazo é de até 5 dias úteis para deixar tudo pronto.'
                    ],

                    [
                        'name' => 'Entrega de acesso',
                        'description' => 'Assim que o site estiver finalizado, você receberá por e-mail todas as credenciais de acesso ao painel administrativo.'
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