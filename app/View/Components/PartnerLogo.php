<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PartnerLogo extends Component
{
    public $partner;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($partner)
    {
        $this->partner = $partner;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.partner-logo');
    }
}
