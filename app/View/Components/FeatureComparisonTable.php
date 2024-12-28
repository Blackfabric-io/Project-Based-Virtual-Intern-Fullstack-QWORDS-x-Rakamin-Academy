<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FeatureComparisonTable extends Component
{
    public $features;
    public $packages;

    /**
     * Create a new component instance.
     *
     * @param  mixed  $features
     * @param  mixed  $packages
     * @return void
     */
    public function __construct($features, $packages)
    {
        $this->features = $features;
        $this->packages = $packages;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.feature-comparison-table');
    }
}
