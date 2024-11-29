<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Head extends Component
{
   public $title;
   public $includeAnimatedBackground;
   public $includeHomePage;
   public $includeRegister;
   public $includeLogin;
    /**
     * Create a new component instance.
     */
    public function __construct($title = 'Colloquium', $includeHomePage = false, $includeRegister = false, $includeLogin = false)
    {
        $this->title = $title;
        $this->includeHomePage = $includeHomePage;
        $this->includeRegister = $includeRegister;
        $this->includeLogin = $includeLogin;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.head');
    }
}