<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\dashboard\Customers;
use App\Http\Controllers\dashboard\EventController;
use App\Http\Controllers\dashboard\Main;
use App\Http\Controllers\dashboard\Messages;
use App\Http\Controllers\dashboard\Property as DashboardProperty;
use App\Http\Controllers\dashboard\Schedules;
use App\Http\Controllers\dashboard\SiteInfo;
use App\Http\Controllers\dashboard\StatisticsController;
use App\Http\Controllers\dashboard\TeamController;
use App\Http\Controllers\EventController as ControllersEventController;
use App\Http\Controllers\Market;
use App\Http\Controllers\MarketDetails;
use App\Http\Controllers\Messenger;
use App\Http\Controllers\Others;
use App\Http\Controllers\Property;
use App\Http\Controllers\PropertyDetails;
use App\Http\Controllers\team\HomeController;
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

Route::get('/', [Controller::class, '_index'])->name('public.home');
Route::post('/update/subscribe', [Controller::class, 'subscribe'])->name('updates.subscribe');
Route::get('/search', [Controller::class, '_search'])->name('search');
Route::get('/property', [Property::class, 'index'])->name('public.property');
Route::get('/projects', [Property::class, 'projects'])->name('public.projects');
Route::get('/projects/{id}', [Property::class, 'project_details'])->name('public.project.details');
// Route::get('/services', [Property::class, 'services_index'])->name('public.services');
Route::post('/services/book/{id}', [Property::class, 'services_booking'])->name('public.services.book');
Route::get('/services/{id}/details', [Property::class, 'service_details'])->name('public.services.details');
Route::get('/service/{id}/enquiry', [Property::class, 'service_enquiry'])->name('public.service.enquiry');
Route::get('/propertyDetails/{id}', [PropertyDetails::class, 'index'])->name('assets.show');
Route::get('/marketDetails/{id}', [MarketDetails::class, 'index']);
Route::get('/bookVisit/{id}', [VisitBooker::class, 'index'])->name('schedule.book');
Route::post('/bookVisit/{id}', [VisitBooker::class, 'submit']);
Route::post('/bookVisit/confirm/{id}', [VisitBooker::class, 'submit'])->name('schedule.confirm');
// Route::get('/about', [Others::class, 'about']);
Route::get('/contact', [Others::class, 'contact'])->name('public.contacts');
Route::get('/team{id}profile', [Others::class, 'team_profile'])->name('public.team_profile');
// Route::get('/random_project', [Controller::class, 'random_project'])->name('public.random.project');

Route::post('/submitSchedule', [VisitBooker::class, 'submit']);
Route::post('/submitMessage', [Messenger::class, 'submit']);//handle submision of orders, problem reports and messages
Route::post('/subscribe', [Others::class, 'subscribe']);


Route::name('rest.')->prefix('rest')->middleware('auth')->group(function(){
    Route::get('/', [Main::class, 'index'])->name('dashboard');
    Route::name('assets.')->prefix('property')->group(function(){
        Route::get('/{service_id}/create', [DashboardProperty::class, 'create'])->name('create');
        Route::post('/{service_id}/create', [DashboardProperty::class, 'store']);
        Route::get('/edit/{id}', [DashboardProperty::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [DashboardProperty::class, 'update']);
        Route::get('/images/{id}', [DashboardProperty::class, 'images'])->name('images');
        Route::post('/images/{id}', [DashboardProperty::class, 'update_images']);
        Route::get('/preview/{id}', [DashboardProperty::class, 'preview'])->name('show');
        Route::get('/delete/{id}', [DashboardProperty::class, 'delete'])->name('delete');
        Route::get('/{service_id?}', [DashboardProperty::class, 'index'])->name('index');
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
        Route::get('/show/{id}', [Controller::class, 'category_show'])->name('show');
        Route::get('/create', [Controller::class, 'category_create'])->name('create');
        Route::post('/create', [Controller::class, 'category_store']);
        Route::get('/edit/{id}', [Controller::class, 'category_edit'])->name('edit');
        Route::post('/edit/{id}', [Controller::class, 'category_update']);
        Route::get('/delete/{id}', [Controller::class, 'category_delete'])->name('delete');
    });
    Route::name('projects.')->prefix('projects')->group(function(){
        Route::get('/show/{id}', [DashboardProperty::class, 'show_project'])->name('show');
        Route::get('/{service_id}/create', [DashboardProperty::class, 'create_project'])->name('create');
        Route::post('/{service_id}/create', [DashboardProperty::class, 'store_project']);
        Route::get('/edit/{id}', [DashboardProperty::class, 'edit_project'])->name('edit');
        Route::post('/edit/{id}', [DashboardProperty::class, 'update_project']);
        Route::get('/images/{id}', [DashboardProperty::class, 'project_images'])->name('images');
        Route::post('/images/{id}', [DashboardProperty::class, 'update_project_images']);
        Route::get('/delete/{id}', [DashboardProperty::class, 'delete_project'])->name('delete');
        Route::get('/{service_id?}', [DashboardProperty::class, 'projects'])->name('index');
    });
    Route::name('services.')->prefix('services')->group(function(){
        Route::get('/show/{id}', [DashboardProperty::class, 'show_service'])->name('show');
        Route::get('/create', [DashboardProperty::class, 'create_service'])->name('create');
        Route::post('/create', [DashboardProperty::class, 'store_service']);
        Route::get('/edit/{id}', [DashboardProperty::class, 'edit_service'])->name('edit');
        Route::post('/edit/{id}', [DashboardProperty::class, 'update_service']);
        Route::get('images/{service_id}', [DashboardProperty::class, 'service_images'])->name('images');
        Route::post('images/{service_id}', [DashboardProperty::class, 'add_service_images']);
        Route::get('/delete/{id}', [DashboardProperty::class, 'delete_service'])->name('delete');
        Route::get('/bookings/{id}', [DashboardProperty::class, 'delete_service'])->name('bookings');
        Route::get('/{category_id?}', [DashboardProperty::class, 'services'])->name('index');
    });
    Route::name('statistics.')->prefix('statistics')->group(function(){
        Route::get('/', [StatisticsController::class, 'index'])->name('index');
        Route::get('/assets', [StatisticsController::class, 'asset_statistics'])->name('assets');
        Route::post('/projects', [StatisticsController::class, 'project_statistics'])->name('projects');
        Route::get('/services', [StatisticsController::class, 'service_statistics'])->name('services');
        Route::post('/bookings', [StatisticsController::class, 'booking_statistics'])->name('bookings');
    });
    Route::name('events.')->prefix('events')->group(function(){
        Route::get('upc', [EventController::class, 'index'])->name('index');
        Route::get('/acheived', [EventController::class, 'acheived'])->name('acheived');
        Route::get('/show{$id}', [EventController::class, 'show'])->name('show');
        Route::get('/create', [EventController::class, 'create'])->name('create');
        Route::post('/create', [EventController::class, 'store']);
        Route::get('/edit{id}', [EventController::class, 'edit'])->name('edit');
        Route::post('/edit{id}', [EventController::class, 'update']);
        Route::get('/del{id}', [EventController::class, 'delete'])->name('delete');
    });
    Route::get('/profile', [Main::class, 'user_profile'])->name('profile');
    Route::post('/profile', [Main::class, 'update_user_profile']);
    Route::get('/faqs/{id?}', [Main::class, 'faqs'])->name('faqs');
    Route::post('/faqs/{id?}', [Main::class, 'update_faqs']);
    Route::post('/faqs/delete/{id}', [Main::class, 'delete_faqs'])->name('faqs.delete');

    Route::prefix('team')->name('team.')->group(function(){
        Route::get('', [TeamController::class, 'index'])->name('index');
        Route::get('activate{profile_id}', [TeamController::class, 'activate'])->name('activate');
        Route::get('deactivate{profile_id}', [TeamController::class, 'deactivate'])->name('deactivate');
        Route::get('mount{profile_id}', [TeamController::class, 'mount'])->name('mount');
        Route::get('unmount{profile_id}', [TeamController::class, 'unmount'])->name('unmount');
    });
});

Route::name('team.')->prefix('team')->middleware('team')->group(function(){
    Route::get('', [HomeController::class, 'home'])->name('home');
    Route::get('edit_profile', [HomeController::class, 'edit_profile'])->name('edit_profile');
    Route::post('edit_profile', [HomeController::class, 'update_profile']);
    Route::get('change_password', [HomeController::class, 'change_password'])->name('change_password');
    Route::post('change_password', [HomeController::class, 'update_password']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
