<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestimonialCarousel extends Component
{
    public $testimonials;

    /**
     * Create a new component instance.
     *
     * @param  mixed  $testimonials
     * @return void
     */
    public function __construct($testimonials)
    {
        $this->testimonials = $testimonials;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.testimonial-carousel');
    }
}
