<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class FAQAccordion extends Component
{
    public Collection|EloquentCollection $faqs;

    public function __construct($faqs)
    {
        $this->faqs = $faqs;
    }

    public function render(): View
    {
        return view('components.f-a-q-accordion');
    }
}
