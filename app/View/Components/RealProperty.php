<?php

namespace App\View\Components;

use App\Models\Asset;
use Illuminate\View\Component;

class RealProperty extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $allProp = collect(Asset::all())->shuffle();
        $trending = $allProp->sortBy('id', true)->take(20);

        return view('components.real-property', ['trending'=>$trending, 'property'=>$allProp]);
    }
}
