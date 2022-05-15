<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Title extends Component
{
    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $type = null)
    {
        if (!$type) {
            $this->text = $text;
        } else {
            switch($type) {
                case 5:
                    $this->text = '<span class="title'.$type.'">'.$text.'</span>';
                    break;
                case 50:
                    $words = explode(' ', $text);
                    $n = (count($words) - 1) / 2;
                    $words[$n] = '<span class="title5">'.$words[$n].'</span>';
                    $this->text = implode(' ', $words);
                    break;
                default:
                    $words = explode(' ', $text);
                    $n = count($words) - 1;
                    $words[$n] = '<span class="title'.$type.'">'.$words[$n].'</span>';
                    $this->text = implode(' ', $words);
                    break;
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.title');
    }
}
