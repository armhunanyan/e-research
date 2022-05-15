<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Training extends Component
{
    public $training;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($training)
    {
        $this->training = $training;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.training');
    }
}
