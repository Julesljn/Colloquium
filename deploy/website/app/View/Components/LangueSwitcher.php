<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LangueSwitcher extends Component
{
    /**
     * Create a new component instance.
     */
    public $currentLocale;
    public $alternateLocale;
    public function __construct()
    {
        $this->currentLocale = app()->getLocale();
        $this->alternateLocale = $this->currentLocale === 'fr' ? 'en' : 'fr';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.langue-switcher');
    }
}
