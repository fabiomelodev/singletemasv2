<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Niche;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::active()->get();

        $projects = Project::active()->get();

        $niches = Niche::active()->get();

        $testimonials = Testimonial::all();

        $faqs = Faq::where('is_home', 1)->get();

        return view('pages.home.index', [
            'services' => $services,
            'projects' => $projects,
            'niches' => $niches,
            'testimonials' => $testimonials,
            'faqs' => $faqs
        ]);
    }
}
