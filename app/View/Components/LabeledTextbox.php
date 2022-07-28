<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LabeledTextbox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $placeHolder = "";
    public $name = "";
    public $type = "";
    public $value = "";
    public $label = "";
    public function __construct($placeHolder = "",$name = "",$type = "text",$value = "",$label = "")
    {
        $this->placeHolder = $placeHolder;
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.labeled-textbox');
    }
}
