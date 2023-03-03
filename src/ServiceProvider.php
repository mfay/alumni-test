<?php

namespace Mfay\AlumniTest;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;


class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'alumni');
        $this->registerRoutes();
    }

    protected function registerRoutes()
    {
        Route::group(['prefix' => 'alumni'], function () {
            $this->loadRoutesFrom(__DIR__ . '/routes.php');
        });
    }
}
