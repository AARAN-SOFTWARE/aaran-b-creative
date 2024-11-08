<?php

namespace Aaran\Network\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class NetworkRouteServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(__DIR__.'/../routes.php');
        });
    }

}
