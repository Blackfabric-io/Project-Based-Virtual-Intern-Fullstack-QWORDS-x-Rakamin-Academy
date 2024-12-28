<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Testimonial extends Component
{
    public $testimonial;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($testimonial)
    {
        $this->testimonial = $testimonial;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.testimonial');
    }
}
