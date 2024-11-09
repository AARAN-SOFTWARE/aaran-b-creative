<?php

namespace Aaran\Profile\Providers {

    use Illuminate\Support\ServiceProvider;

    class ProfileServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
            $this->mergeConfigFrom(__DIR__ . '/../config.php','profile');

            $this->app->register(ProfileRouteServiceProvider::class);
        }

    }
}
