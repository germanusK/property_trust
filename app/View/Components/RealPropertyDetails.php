<?php

namespace App\View\Components;

use App\Models\Asset;
use Illuminate\Routing\Router;
use Illuminate\View\Component;

class RealPropertyDetails extends Component
{

    private $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        //
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $data = Asset::find($this->id);
        $related = Asset::where('service_id', $data->service_id)->where('id', '!=', $this->id)                    
                    ->select(['assets.*'])->paginate(24);
        return view('components.real-property-details', ['data'=>$data, 'related'=>$related]);
    }
}
