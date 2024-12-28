<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LoadingState extends Component
{
    public $size;
    public $color;
    public $type;
    public $message;

    public function __construct(
        $size = 'md',
        $color = 'blue',
        $type = 'spinner',
        $message = 'Loading...'
    ) {
        $this->size = $size;
        $this->color = $color;
        $this->type = $type;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.loading-state');
    }
}

