<?php

namespace Mfay\AlumniTest;

use Illuminate\Contracts\View\View;
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

        view()->creator('components.layouts.admin', function(View $view) {
            $menu = $view->__get('menu');
            $menu['alumni'][] = ['title' => 'Alumni Custom', 'url' => 'bob'];
            $menu['alumni'][] = ['title' => 'Another Thing', 'url' => 'sue'];
            $view->with('menu', $menu);
        });
    }

    protected function registerRoutes()
    {
        Route::group(['prefix' => 'alumni'], function () {
            $this->loadRoutesFrom(__DIR__ . '/routes.php');
        });
    }
}
