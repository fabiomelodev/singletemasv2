<?php

namespace App\View\Components\Layout;

use App\Models\Page;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct() {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $pages = Page::active()->get();

        return view('components.layout.footer', [
            'pages' => $pages
        ]);
    }
}
