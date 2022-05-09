<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Jumbotron extends Component
{
    public $title;
    public $subtitle;
    public $button;
    public $bg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null, $subtitle = null, $button = null, $bg)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->button = $button;
        $this->bg = $bg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.jumbotron');
    }
}
