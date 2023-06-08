<?php

namespace App\View\Components;

use App\HttpService\HttpServiceProvider;
use Illuminate\View\Component;

class RealMarket extends Component
{

    protected $httpService;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(HttpServiceProvider $provider)
    {
        //
        $this->httpService = $provider;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $trending = $this->httpService->genericGetLatestTrending(['group'=>'GC'])->collect();
        $data = $this->httpService->genericGetProperty(['group'=>'GC'])->collect();

        return view('components.real-market', ['trending'=>$trending, 'data'=>$data]);
    }
}
