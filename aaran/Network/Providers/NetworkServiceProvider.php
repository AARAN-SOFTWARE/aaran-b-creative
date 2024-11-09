<?php

namespace Aaran\Network\Providers {

    use Illuminate\Support\ServiceProvider;

    class NetworkServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
            $this->mergeConfigFrom(__DIR__ . '/../config.php','network');

            $this->app->register(NetworkRouteServiceProvider::class);
        }

    }
}
