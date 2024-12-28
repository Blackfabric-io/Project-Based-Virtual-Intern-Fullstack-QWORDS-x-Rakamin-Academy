<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PricingCard extends Component
{
    public $pricing;

    /**
     * Create a new component instance.
     *
     * @param  mixed  $pricing
     * @return void
     */
    public function __construct($pricing)
    {
        $this->pricing = $pricing;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pricing-card');
    }
}
