<?php

namespace App\View\Components;

use App\Models\Process;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Processes extends Component
{
    public Collection $processes;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->processes = Process::orderBy('order')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.processes');
    }
}
