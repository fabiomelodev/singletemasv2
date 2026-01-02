<section class="bg-slate-950/50 py-20 px-4 sm:px-6 lg:px-8" id="cases">

    <style>
        .case-item-thumbnail {
            width: 100%;
            height: 100px;
            background-color: red;
        }
    </style>

    <div class="max-w-7xl mx-auto">

        <div class="mb-16">
            <h2 class="section-title">
                Nossos Cases
            </h2>

            <p class="section-description">
                Alguns projetos realizados ao decorrer da nossa trajetória
            </p>
        </div>

        <div class="grid grid-cols-3 gap-y-6 gap-x-4">

            @foreach($projects as $project)
                <div class="case-item">
                    <div clas="case-item-thumbnail"
                        style="width:90%;height:150px;margin-top:-56px;border:1px solid rgba(0, 0, 0, .2);border-radius:10px;overflow:hidden">
                        @if($project->thumbnail)
                            <img class="w-full h-full object-cover" src="{{  $project->thumbnail }}"
                                alt="{{  $project->name }}" />
                        @else
                            <div class="w-full h-full flex items-end bg-purple-800 p-4">

                                <h6 class="text-xs font-black text-white/50">
                                    {{  $project->name }}
                                </h6>
                            </div>
                        @endif
                    </div>

                    <div class="flex justify-between items-center mt-4">
                        <h6 class="text-lg font-bold text-white/80">
                            {{  $project->name }}
                        </h6>

                        <p class="text-xs text-gray-400">
                            {{ $project->link }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>