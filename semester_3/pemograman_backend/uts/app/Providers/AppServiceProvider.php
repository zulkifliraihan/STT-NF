<?php

namespace App\Providers;

use App\Http\Services\LoginService\LoginInterface;
use App\Http\Services\LoginService\LoginService;
use App\Http\Services\PatienService\PatienInterface;
use App\Http\Services\PatienService\PatienService;
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
        $this->app->bind(LoginInterface::class, LoginService::class);
        $this->app->bind(PatienInterface::class, PatienService::class);

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
