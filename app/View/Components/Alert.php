<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    //
    //public $text;
    public $style;
    //public $test;
    //
    public function __construct($style, /*$text, $test*/)
    {
        //
        //$this->text = $text;
        $this->style = $style;
        //$this->test = $test;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
