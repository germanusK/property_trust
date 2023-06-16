<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\Customer;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class Main extends Controller
{
    //
    function index(Request $request){
        $asset_base = Asset::whereYear('created_at', '!=', now()->format('Y'))->count();
        $service_base = Service::whereYear('created_at', '!=', now()->format('Y'))->count();
        $project_base = Project::whereYear('created_at', '!=', now()->format('Y'))->count();
        $customer_base = Customer::whereYear('created_at', '!=', now()->format('Y'))->count();

        $assets = Asset::whereYear('created_at', now()->format('Y'))->count();
        $services = Service::whereYear('created_at', now()->format('Y'))->count();
        $projects = Project::whereYear('created_at', now()->format('Y'))->count();
        $customers = Customer::whereYear('created_at', now()->format('Y'))->count();

        $base = $asset_base + $service_base + $project_base;
        $change = $assets + $services + $projects;

        $data['growth'] = $change * 100/($base == 0 ? 1 : $base);
        return view('dashboard.home', $data);
    }

    public function create()
    {
        # code...
    }
}
