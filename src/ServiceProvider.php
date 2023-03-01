<?php

namespace Mfay\AlumniTest;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;


class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        $this->app['router']->get('/alumni/test2', function () {
            return "Please work";
        });
    }
}
