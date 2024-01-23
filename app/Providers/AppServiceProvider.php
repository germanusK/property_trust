<?php

namespace App\Providers;

use App\HttpService\HttpServiceProvider;
use App\Services\MailService;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Http;
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
        $this->app->bind(HttpServiceProvider::class, function($app){
            return new HttpServiceProvider();
        });
        $this->app->bindIf(MailService::class, function($app){
            return new MailService(env('BREVO_API_KEY'));
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
    }
}
