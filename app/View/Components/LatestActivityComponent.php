<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestActivityComponent extends Component
{
    public $activity;
    public function __construct($activity)
    {
        $this->activity = $activity;
    }

    public function render(): View|Closure|string
    {
        return view('components.latest-activity-component');
    }
}
