<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Menu;
use App\Models\Niche;
use App\Models\Plan;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class NicheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Niche $niche)
    {
        $menu = Menu::where('slug', 'menu-single-nicho')->first();

        $plans = $niche->plans()->get();

        $productDevelopWebiste = $niche->products()->where('slug', 'desenvolvimento-de-sites')->first();

        $productTemplate = $niche->products()->where('slug', 'site-modelo-pronto')->first();

        $testimonials = $niche->testimonials()->get();

        $resources = $niche->resources()->orderAsc()->get();

        $projects = $niche->projects()->get();

        return view('pages.single-niche.index', [
            'menu' => $menu,
            'niche' => $niche,
            'plans' => $plans,
            'productDevelopWebiste' => $productDevelopWebiste,
            'productTemplate' => $productTemplate,
            'resources' => $resources,
            'projects' => $projects,
            'testimonials' => $testimonials
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function singleChurch()
    {
        $resources = [
            [
                'name' => 'Site da Igreja Responsivo',
                'plans' => [
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]
            ],

            [
                'name' => 'Agenda de Eventos/Cultos',
                'plans' => [
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]
            ],

            [
                'name' => 'Número de Páginas',
                'plans' => [
                    [
                        'name' => 'Essencial',
                        'type' => 'text',
                        'value' => '5'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'text',
                        'value' => '15'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'text',
                        'value' => 'ilimitado'
                    ],
                ]
            ],

            [
                'name' => 'Pedidos de Oração Online',
                'plans' => [
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]
            ],

            [
                'name' => 'Integração Redes Sociais',
                'plans' => [
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]
            ],

            [
                'name' => 'Blog/Devocionais',
                'plans' => [
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]
            ],

            [
                'name' => 'Gestão de Membros Básica',
                'plans' => [
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]
            ],

            [
                'name' => 'Galeria de Fotos/Vídeos',
                'plans' => [
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]
            ],

            [
                'name' => 'Estudos Bíblicos',
                'plans' => [
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'true'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]
            ],

            [
                'name' => 'Gestão de Células/Grupos',
                'plans' => [
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]
            ],

            [
                'name' => 'Escala de Voluntários',
                'plans' => [
                    [
                        'name' => 'Essencial',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'check',
                        'value' => 'false'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'check',
                        'value' => 'true'
                    ],
                ]
            ],

            [
                'name' => 'Suporte',
                'plans' => [
                    [
                        'name' => 'Essencial',
                        'type' => 'text',
                        'value' => 'E-mail'
                    ],

                    [
                        'name' => 'Completo',
                        'type' => 'text',
                        'value' => 'Prioritário'
                    ],

                    [
                        'name' => 'Premium',
                        'type' => 'text',
                        'value' => '24/7'
                    ],
                ]
            ],
        ];

        $plans = null;

        return view('pages.single-niche.index', [
            'plans' => $plans,
            'resources' => $resources
        ]);
    }
}
