<?php

namespace App\View\Components;

use App\Models\Faq as FaqModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Faq extends Component
{
    public Collection $faqs;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->faqs = FaqModel::orderAsc()->active()->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.faq');
    }
}
