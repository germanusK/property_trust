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
        $related = Asset::join('asset_categories', ['asset_categories.asset_id'=>'assets.id'])
                    ->join('asset_grades', ['asset_grades.asset_id'=>'assets.id'])
                    ->whereIn('asset_categories.id', $data->categories()->pluck('categories.id')->toArray())
                    ->whereIn('asset_grades.id', $data->grades()->pluck('grades.id')->toArray())
                    ->where('assets.id', '!=', $this->id)
                    ->distinct()
                    ->orderBy('asset_grades.id')
                    ->orderBy('asset_categories.id')
                    ->select(['assets.*'])->paginate(24);
        return view('components.real-property-details', ['data'=>$data, 'related'=>$related]);
    }
}
