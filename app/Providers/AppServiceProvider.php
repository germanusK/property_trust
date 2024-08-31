<?php

namespace App\Providers;

use App\HttpService\HttpServiceProvider;
use App\Models\Category;
use App\Models\Service;
use App\Models\Town;
use App\Services\MailService;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        // $this->app->bind(HttpServiceProvider::class, function($app){
        //     return new HttpServiceProvider();
        // });
        $this->app->bindIf(MailService::class, function($app){
            return new MailService(config('services.brevo.key'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::share('services', Service::orderBy('name')->get());
        View::share('categories', Category::orderBy('name')->get());
        View::share('towns', Town::orderBy('name')->get());
    }
}
