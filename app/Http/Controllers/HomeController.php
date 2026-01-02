<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Menu;
use App\Models\Niche;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $menu = Menu::where('slug', 'menu-pagina-home')->first();

        $services = Service::active()->get();

        $projects = Project::active()->get();

        $niches = Niche::active()->get();

        $testimonials = Testimonial::inRandomOrder()->get();

        return view('pages.home.index', [
            'menu' => $menu,
            'services' => $services,
            'projects' => $projects,
            'niches' => $niches,
            'testimonials' => $testimonials
        ]);
    }
}
