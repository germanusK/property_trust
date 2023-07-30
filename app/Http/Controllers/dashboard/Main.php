<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\Customer;
use App\Models\Project;
use App\Models\Schedule;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;

class Main extends Controller
{
    //
    function index(Request $request){

        $assetDataTable = Lava::DataTable();
        $customerDataTable = Lava::DataTable();
        $scheduleDataTable = Lava::DataTable();
        $mainDataTable = Lava::DataTable();
        // $dataTable_1->addDateColumn('Day of Month')
        //             ->addNumberColumn('Projected');
        $asset_groups = Asset::all()->groupBy(function($row){return Carbon::parse($row->created_at)->format('m-Y');});
        $customer_groups = Customer::all()->groupBy(function($row){return Carbon::parse($row->created_at)->format('m-Y');});
        $schedule_groups = Schedule::all()->groupBy(function($row){return Carbon::parse($row->created_at)->format('m-Y');});
        // dd($schedule_groups);
        
        
        $assetDataTable->addDateColumn('Month')
                    ->addNumberColumn('Count');
        foreach ($asset_groups as $key => $value) {
            $assetDataTable->addRow([Carbon::parse($value->first()->created_at)->format('m/y'), $value->count()]);
        }
        $customerDataTable->addDateColumn('Month')
                    ->addNumberColumn('Count');
        foreach ($customer_groups as $key => $value) {
            $customerDataTable->addRow([Carbon::parse($value->first()->created_at)->format('m/y'), $value->count()]);
        }
        $scheduleDataTable->addDateColumn('Month')
                    ->addNumberColumn('Count');
        foreach ($schedule_groups as $key => $value) {
            $scheduleDataTable->addRow([Carbon::parse($value->first()->created_at)->format('m/y'), $value->count()]);
        }

        $mainDataTable->addStringColumn('Type')->addNumberColumn('Quantity');
        $mainDataTable->addRows([
            ['Assets', Asset::count()], ['Projects', Project::count()], ['Services', Service::count()], ['Customers', Customer::count()], ['Schedules', Schedule::count()]
        ]);
        

        $assets = Lava::AreaChart('ASSET_STATISTICS', $assetDataTable, ['title'=>"ASSET STATISTICS"]);
        $customers = Lava::AreaChart('CUSTOMER_STATISTICS', $customerDataTable, ['title'=>'CUSTOMER STATISTICS']);
        $schedules = Lava::AreaChart('SCHEDULE_STATISTICS', $scheduleDataTable, ['title'=>'SCHEDULE STATISTICS']);
        $all_stats = Lava::PieChart('MAIN_CHART', $mainDataTable, ['title'=>'ENTIRE STATISTICS']);

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
