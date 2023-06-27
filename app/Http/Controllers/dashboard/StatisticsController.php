<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    //

    public function index(Request $request)
    {
        # code...
        $data['title'] = "Statistics";
        return view('dashboard.statistics.index', $data);
    }

    public function asset_statistics(Request $request)
    {
        # code...
        $data['title'] = "Asset Statistics";
        return view('dashboard.statistics.asset_statistics', $data);
    }

    public function service_statistics(Request $request)
    {
        # code...
        $data['title'] = "Service Statistics";
        return view('dashboard.statistics.service_statistics', $data);
    }

    public function project_statistics(Request $request)
    {
        # code...
        $data['title'] = "Project Statistics";
        return view('dashboard.statistics.project_statistics', $data);
    }

    public function customer_statistics(Request $request)
    {
        # code...
        $data['titlde'] = "Customer Statistics";
        return view('dashboard.statistics.customer_statistics', $data);
    }
}
