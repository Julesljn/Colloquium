<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class logoColloquium extends Component
{
    /**
     * Create a new component instance.
     */
    public $color;
    public $link;

    public function __construct($color = '#fbfbfb', $link = '/')
    {
        $this->color = $color;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.logo-colloquium');
    }
}
