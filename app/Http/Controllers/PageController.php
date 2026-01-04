<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return view('pages.single-page.index', [
            'page' => $page
        ]);
    }
}
