<?php

namespace Switchwatt\LaravelSdk;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class PlatformSdkServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/platform.php', 'platform');

        $this->app->singleton(PlatformClient::class, function () {
            return new PlatformClient(
                config('platform.api_token'),
                config('platform.base_url')
            );
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/platform.php' => config_path('platform.php'),
            ], 'config');
        }
    }
}
