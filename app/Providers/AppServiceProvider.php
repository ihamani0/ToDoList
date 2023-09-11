<?php

namespace App\Providers;

use App\Service\Test;
use Illuminate\Support\ServiceProvider;

use App\Service\PodcastParser;
use App\Service\TestService;
use Illuminate\Contracts\Foundation\Application;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(Test::class , fn () => new TestService());
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
