<?php

namespace Aaran\Member\Providers {

    use Illuminate\Support\ServiceProvider;

    class MemberServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
            $this->mergeConfigFrom(__DIR__ . '/../config.php','member');

            $this->app->register(MemberRouteServiceProvider::class);
        }

    }
}
