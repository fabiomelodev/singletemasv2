<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Menu;
use App\Models\Niche;
use App\Models\Page;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use App\Settings\PageHomeSettings;

class HomeController extends Controller
{
    // public PageHomeSettings $settings;

    public function index()
    {
        $settings = app(PageHomeSettings::class);

        $menu = Menu::where('slug', 'menu-pagina-home')->first();

        $projects = Project::active()->whereIn('id', $settings->cases)->get();

        $productDevelopWebiste = Product::where('slug', 'desenvolvimento-de-sites')->first();

        $productTemplate = Product::where('slug', 'site-modelo-pronto')->first();

        $niches = Niche::active()->get();

        $testimonials = Testimonial::inRandomOrder()->get();

        return view('pages.home.index', [
            'settings' => $settings,
            'menu' => $menu,
            'projects' => $projects,
            'productDevelopWebiste' => $productDevelopWebiste,
            'productTemplate' => $productTemplate,
            'niches' => $niches,
            'testimonials' => $testimonials
        ]);
    }
}
