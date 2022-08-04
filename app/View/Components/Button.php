<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $skin = "";
    public $label = "";
    public $type = "";
    public $onClick;
    public function __construct($skin = "primary",$label = "Submit",$type="submit",$onClick = "")
    {
        $this->skin = $skin;
        $this->label = $label;
        $this->type = $type;
        $this->onClick = $onClick;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
