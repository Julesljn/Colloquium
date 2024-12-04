<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Head extends Component
{
   public $title;
   public $includeHomePage;
   public $includeRegisterLogin;
   public $includeLegal;
    /**
     * Create a new component instance.
     */
    public function __construct($title = 'Colloquium', $includeHomePage = false, $includeRegisterLogin = false, $includeLegal = false)
    {
        $this->title = $title;
        $this->includeHomePage = $includeHomePage;
        $this->includeRegisterLogin = $includeRegisterLogin;
        $this->includeLegal = $includeLegal;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.head');
    }
}