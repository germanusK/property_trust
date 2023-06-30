<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\dashboard\Customers;
use App\Http\Controllers\dashboard\Main;
use App\Http\Controllers\dashboard\Messages;
use App\Http\Controllers\dashboard\Property as DashboardProperty;
use App\Http\Controllers\dashboard\Schedules;
use App\Http\Controllers\dashboard\SiteInfo;
use App\Http\Controllers\dashboard\StatisticsController;
use App\Http\Controllers\Market;
use App\Http\Controllers\MarketDetails;
use App\Http\Controllers\Messenger;
use App\Http\Controllers\Others;
use App\Http\Controllers\Property;
use App\Http\Controllers\PropertyDetails;
use App\Http\Controllers\VisitBooker;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, '_index']);
Route::post('/update/subscribe', [Controller::class, 'subscribe'])->name('updates.subscribe');
Route::get('/search', [Controller::class, '_search'])->name('search');
Route::get('/property', [Property::class, 'index']);
Route::get('/services', [Property::class, 'services_index'])->name('public.services');
Route::get('/services/{id}/details', [Property::class, 'service_details'])->name('public.services.details');
Route::get('/propertyDetails/{id}', [PropertyDetails::class, 'index'])->name('assets.show');
Route::get('/marketDetails/{id}', [MarketDetails::class, 'index']);
Route::get('/bookVisit/{id}', [VisitBooker::class, 'index'])->name('schedule.book');
Route::post('/bookVisit/{id}', [VisitBooker::class, 'submit']);
Route::post('/bookVisit/confirm/{id}', [VisitBooker::class, 'submit'])->name('schedule.confirm');
Route::get('/about', [Others::class, 'about']);
Route::get('/contact', [Others::class, 'contact'])->name('public.contacts');

Route::post('/submitSchedule', [VisitBooker::class, 'submit']);
Route::post('/submitMessage', [Messenger::class, 'submit']);//handle submision of orders, problem reports and messages
Route::post('/subscribe', [Others::class, 'subscribe']);


Route::name('rest.')->prefix('rest')->middleware('auth')->group(function(){
    Route::get('/', [Main::class, 'index'])->name('dashboard');
    Route::name('assets.')->prefix('property')->group(function(){
        Route::get('/', [DashboardProperty::class, 'index'])->name('index');
        Route::get('/create', [DashboardProperty::class, 'create'])->name('create');
        Route::post('/create', [DashboardProperty::class, 'store']);
        Route::get('/edit/{id}', [DashboardProperty::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [DashboardProperty::class, 'update']);
        Route::get('/preview/{id}', [DashboardProperty::class, 'preview'])->name('show');
        Route::post('/delete/{id}', [DashboardProperty::class, 'delete'])->name('delete');
    });
    Route::name('schedules.')->prefix('schedules')->group(function(){
        Route::get('/', [schedules::class, 'index'])->name('index');
        Route::get('/preview/{id}', [schedules::class, 'preview'])->name('show');
        Route::get('/edit/{id}', [schedules::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [schedules::class, 'update']);
        Route::get('/filter/{type}', [Schedules::class, 'filter'])->name('filter');//types: pending, achieved, expired
        Route::post('/delete/{id}', [schedules::class, 'delete'])->name('delete');
    });
    Route::name('customers.')->prefix('customers')->group(function(){
        Route::get('/', [customers::class, 'index'])->name('index');
        Route::get('/preview/{id}', [customers::class, 'preview'])->name('show');
        Route::get('/edit/{id}', [customers::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [customers::class, 'update']);
        Route::post('/delete/{id}', [customers::class, 'delete'])->name('delete');
        Route::get('/filter/{type}', [customers::class, 'edit'])->name('filter');
    });
    Route::name('info.')->prefix('info')->group(function(){
        Route::get('/', [siteInfo::class, 'index'])->name('index');
        Route::get('/preview/{id}', [siteInfo::class, 'preview'])->name('show');
        Route::get('/edit/{id}', [siteInfo::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [siteInfo::class, 'update']);
    });
    Route::name('messages.')->prefix('messages')->group(function(){
        Route::get('/', [messages::class, 'index'])->name('index');
        Route::get('/create', [messages::class, 'create'])->name('create');
        Route::post('/create', [messages::class, 'store']);
        Route::get('/preview/{id}', [messages::class, 'preview'])->name('show');
        Route::get('/reply/{id}', [messages::class, 'reply'])->name('reply');
        Route::post('/reply/{id}', [messages::class, 'respond']);
        Route::post('/delete/{id}', [messages::class, 'delete'])->name('delete');
    });
    Route::name('categories.')->prefix('categories')->group(function(){
        Route::get('/', [Controller::class, 'category_index'])->name('index');
        Route::get('/create', [Controller::class, 'category_create'])->name('create');
        Route::post('/create', [Controller::class, 'category_store']);
        Route::get('/edit/{id}', [Controller::class, 'category_edit'])->name('edit');
        Route::post('/edit/{id}', [Controller::class, 'category_update']);
        Route::post('/delete/{id}', [Controller::class, 'category_delete'])->name('delete');
    });
    Route::name('grades.')->prefix('grades')->group(function(){
        Route::get('/', [Controller::class, 'grade_index'])->name('index');
        Route::get('/create', [Controller::class, 'grade_create'])->name('create');
        Route::post('/create', [Controller::class, 'grade_store']);
        Route::get('/edit/{id}', [Controller::class, 'grade_edit'])->name('edit');
        Route::post('/edit/{id}', [Controller::class, 'grade_edit']);
        Route::post('/delete/{id}', [Controller::class, 'grade_delete'])->name('delete');
    });
    Route::name('projects.')->prefix('projects')->group(function(){
        Route::get('/', [DashboardProperty::class, 'projects'])->name('index');
        Route::get('/show/{id}', [DashboardProperty::class, 'show_project'])->name('show');
        Route::get('/create', [DashboardProperty::class, 'create_project'])->name('create');
        Route::post('/create', [DashboardProperty::class, 'store_project']);
        Route::get('/edit/{id}', [DashboardProperty::class, 'edit_project'])->name('edit');
        Route::post('/edit/{id}', [DashboardProperty::class, 'update_project']);
        Route::get('/images/{id}', [DashboardProperty::class, 'project_images'])->name('images');
        Route::post('/images/{id}', [DashboardProperty::class, 'update_project_images']);
        Route::post('/delete/{id}', [DashboardProperty::class, 'delete_project'])->name('delete');
    });
    Route::name('services.')->prefix('services')->group(function(){
        Route::get('/', [DashboardProperty::class, 'services'])->name('index');
        Route::get('/show/{id}', [DashboardProperty::class, 'show_service'])->name('show');
        Route::get('/create', [DashboardProperty::class, 'create_service'])->name('create');
        Route::post('/create', [DashboardProperty::class, 'store_service']);
        Route::get('/edit/{id}', [DashboardProperty::class, 'edit_service'])->name('edit');
        Route::post('/edit/{id}', [DashboardProperty::class, 'update_service']);
        Route::post('/delete/{id}', [DashboardProperty::class, 'delete_service'])->name('delete');
    });
    Route::name('statistics.')->prefix('statistics')->group(function(){
        Route::get('/', [StatisticsController::class, 'index'])->name('index');
        Route::get('/assets', [StatisticsController::class, 'asset_statistics'])->name('assets');
        Route::post('/projects', [StatisticsController::class, 'project_statistics'])->name('projects');
        Route::get('/services', [StatisticsController::class, 'service_statistics'])->name('services');
        Route::post('/customers', [StatisticsController::class, 'customer_statistics'])->name('customers');
    });
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
