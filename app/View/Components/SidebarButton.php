<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $label = "";
    public $location = "";
    public $isSelected;
    public function __construct($label,$location,$isSelected = false)
    {
        $this->label = $label;
        $this->location = $location;
        $this->isSelected = $isSelected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar-button');
    }
}
