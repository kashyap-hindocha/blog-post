<?php

namespace App\View\Components\Frontend;

use App\Models\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $menu = json_decode(Menu::first()->footer_menu, true);
        return view('components.frontend.footer', compact( "menu"));
    }
}