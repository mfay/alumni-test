<?php

namespace Mfay\AlumniTest;

use Illuminate\Contracts\View\View;
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

        view()->creator('components.layouts.admin', function (View $view) {
            $menu = $view->menu ?? [];
            $menu['alumni'][] = ['title' => 'Alumni Owned Business', 'url' => route('alumni.admin.index')];
            $menu['alumni'][] = ['title' => 'Alumni Help', 'url' => route('alumni.help')];
            $view->with('menu', $menu);
        });
    }

    protected function registerRoutes()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }
}
