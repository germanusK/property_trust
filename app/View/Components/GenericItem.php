<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GenericItem extends Component
{

    public $data;
    // $item @ model
    // 'name',
    // 'group',
    // 'category',
    // 'description',
    // 'images',
    // 'grade',
    // 'price'
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.generic-item', ['data'=>$this->data]);
    }
}
