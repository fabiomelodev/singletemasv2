<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        $menu = Menu::where('slug', 'menu-pagina-home')->first();

        return view('pages.single-page.index', [
            'menu' => $menu,
            'page' => $page
        ]);
    }
}
